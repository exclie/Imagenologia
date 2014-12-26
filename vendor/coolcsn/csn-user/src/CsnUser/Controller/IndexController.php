<?php
/**
 * CsnUser - Coolcsn Zend Framework 2 User Module
 * 
 * @link https://github.com/coolcsn/CsnUser for the canonical source repository
 * @copyright Copyright (c) 2005-2013 LightSoft 2005 Ltd. Bulgaria
 * @license https://github.com/coolcsn/CsnUser/blob/master/LICENSE BSDLicense
 * @author Stoyan Cheresharov <stoyan@coolcsn.com>
 * @author Svetoslav Chonkov <svetoslav.chonkov@gmail.com>
 * @author Nikola Vasilev <niko7vasilev@gmail.com>
 * @author Stoyan Revov <st.revov@gmail.com>
 * @author Martin Briglia <martin@mgscreativa.com>
 */

namespace CsnUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Session\SessionManager;
use Zend\Http\Client;
use Zend\Http\Client\Adapter\Curl;
use Zend\Session\Config\StandardConfig;

use CsnUser\Entity\User;
use CsnUser\Options\ModuleOptions;

/**
 * Index controller
 */
class IndexController extends AbstractActionController
{
    /**
     * @var ModuleOptions
     */
    protected $options;

    /**
     * @var Doctrine\ORM\EntityManager
     */
    protected $entityManager;
    
    /**
     * @var Zend\Mvc\I18n\Translator
     */
    protected $translatorHelper;
    
    /**
     * @var Zend\Form\Form
     */
    protected $userFormHelper;

    /**
     * Index action
     *
     * The method show to users they are guests
     *
     * @return Zend\View\Model\ViewModelarray navigation menu
     */
    public function indexAction()
    {
        return new ViewModel(array('navMenu' => $this->getOptions()->getNavMenu()));
    }

    /**
     * Log in action
     *
     * The method uses Doctrine Entity Manager to authenticate the input data
     *
     * @return Zend\View\Model\ViewModel|array login form|array messages|array navigation menu
     */
    public function loginAction()
    {
        
        if ($user = $this->identity()) {
            return $this->redirect()->toRoute($this->getOptions()->getLoginRedirectRoute());
        }
        
        $user = new User;
        $form = $this->getUserFormHelper()->createUserForm($user, 'login');
        $messages = null;
        if ($this->getRequest()->isPost()) {
            $form->setValidationGroup('usernameOrEmail', 'password', 'rememberme', 'csrf');
            $form->setData($this->getRequest()->getPost());
            $captcha = $this->getRequest()->getPost('g-recaptcha-response');
            if($this->recaptcha($captcha) === true) {
                if ($form->isValid()) {
                    $data = $form->getData();
                    $authService = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
                    $adapter = $authService->getAdapter();
                    $usernameOrEmail = $this->params()->fromPost('usernameOrEmail');

                    try {
                        $user = $this->getEntityManager()->createQuery("SELECT u FROM CsnUser\Entity\User u WHERE u.email = '$usernameOrEmail' OR u.username = '$usernameOrEmail'")->getResult(\Doctrine\ORM\Query::HYDRATE_OBJECT);
                        $user = $user[0];
                        
                        if(!isset($user)) {
                            $message = 'The username or email is not valid!';
                            return new ViewModel(array(
                                'error' => $this->getTranslatorHelper()->translate('Your authentication credentials are not valid'),
                                'form'  => $form,
                                'messages' => $messages,
                                'navMenu' => $this->getOptions()->getNavMenu()
                            ));
                        }
                        
                        if($user->getState()->getId() < 2) {
                            $messages = $this->getTranslatorHelper()->translate('Your username is disabled. Please contact an administrator.');
                            return new ViewModel(array(
                                'error' => $this->getTranslatorHelper()->translate('Your authentication credentials are not valid'),
                                'form'  => $form,
                                'messages' => $messages,
                                'navMenu' => $this->getOptions()->getNavMenu()
                            ));
                        }

                        $adapter->setIdentityValue($user->getUsername());
                        $adapter->setCredentialValue($this->params()->fromPost('password'));

                        $authResult = $authService->authenticate();
                        if ($authResult->isValid()) {
                            $identity = $authResult->getIdentity();
                            $authService->getStorage()->write($identity);
                            
                            if ($this->params()->fromPost('rememberme')) {
                                $time = 1209600; // 14 days (1209600/3600 = 336 hours => 336/24 = 14 days)
                                $sessionManager = new SessionManager();
                                $sessionManager->rememberMe($time);
                            }

                            return $this->redirect()->toRoute($this->getOptions()->getLoginRedirectRoute());
                        }
                        
                        foreach ($authResult->getMessages() as $message) {
                          $messages .= "$message\n";
                        }
                    } catch (\Exception $e) {
                        return $this->getServiceLocator()->get('csnuser_error_view')->createErrorView(
                            $this->getTranslatorHelper()->translate('Something went wrong during login! Please, try again later.'),
                            $e,
                            $this->getOptions()->getDisplayExceptions(),
                            $this->getOptions()->getNavMenu()
                        );
                    }
                }
            } else {
                return new ViewModel(array(
                    'error' => $this->getTranslatorHelper()->translate('Captcha no válido, intente de nuevo.'),
                    'form'  => $form,
                    'messages' => $messages,
                    'navMenu' => $this->getOptions()->getNavMenu()
                ));
            }
        }
        
        return new ViewModel(array(
            'error' => $this->getTranslatorHelper()->translate('Your authentication credentials are not valid'),
            'form'	=> $form,
            'messages' => $messages,
            'navMenu' => $this->getOptions()->getNavMenu()
        ));
    }

    /**
     * Log out action
     *
     * The method destroys session for a logged user
     *
     * @return redirect to specific action
     */
    public function logoutAction()
    {
        $this->layout('layout/inicio');
        $auth = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
        if ($auth->hasIdentity()) {
            $auth->clearIdentity();
            $sessionManager = new SessionManager();
            $sessionManager->forgetMe();
        }

        return $this->redirect()->toRoute($this->getOptions()->getLogoutRedirectRoute());
    }

    /**
     * get options
     *
     * @return ModuleOptions
     */
    private function recaptcha($gresponse) {
      $client = new Client('https://www.google.com/recaptcha/api/siteverify',array(
        'adapter' => 'Zend\Http\Client\Adapter\Curl'
      ));
      $client->setParameterGet(array(
        'secret' => '6LeCD_8SAAAAADNJZK_JQFFsT8D85Ff9JCYYatin',
        'response' => $gresponse,
      ));
      $response = $client->send();
      $respuesta = $client->getResponse()->getBody();
      $respuesta = str_replace('false','"false"',$respuesta);
      $respuesta = str_replace('true','"true"',$respuesta);
      $respuesta = json_decode($respuesta,true);
      if($respuesta['success'] == 'true') {
        return true;
      } else {
        return false;
      }
    }

    private function getOptions()
    {
        if (null === $this->options) {
            $this->options = $this->getServiceLocator()->get('csnuser_module_options');
        }
      
        return $this->options;
    }

    /**
     * get entityManager
     *
     * @return EntityManager
     */
    private function getEntityManager()
    {
        if (null === $this->entityManager) {
            $this->entityManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->entityManager;
    }
    
    /**
     * get translatorHelper
     *
     * @return  Zend\Mvc\I18n\Translator
     */
    private function getTranslatorHelper()
    {
        if (null === $this->translatorHelper) {
           $this->translatorHelper = $this->getServiceLocator()->get('MvcTranslator');
        }
      
        return $this->translatorHelper;
    }
    
    /**
     * get userFormHelper
     *
     * @return  Zend\Form\Form
     */
    private function getUserFormHelper()
    {
        if (null === $this->userFormHelper) {
           $this->userFormHelper = $this->getServiceLocator()->get('csnuser_user_form');
        }
      
        return $this->userFormHelper;
    }
}
