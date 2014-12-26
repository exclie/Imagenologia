<?php

namespace DoctrineORMModule\Proxy\__CG__\CsnUser\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Receptor extends \CsnUser\Entity\Receptor implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'ID', 'RFC', 'NOMBRE', 'ESTADO', 'MUNICIPIO', 'PAIS', 'COLONIA', 'CALLE', 'NUM_INT', 'NUM_EXT', 'CP', 'EMAIL', 'TELEFONO', 'TELMOVIL');
        }

        return array('__isInitialized__', 'ID', 'RFC', 'NOMBRE', 'ESTADO', 'MUNICIPIO', 'PAIS', 'COLONIA', 'CALLE', 'NUM_INT', 'NUM_EXT', 'CP', 'EMAIL', 'TELEFONO', 'TELMOVIL');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Receptor $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getID', array());

        return parent::getID();
    }

    /**
     * {@inheritDoc}
     */
    public function setID($ID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setID', array($ID));

        return parent::setID($ID);
    }

    /**
     * {@inheritDoc}
     */
    public function getRFC()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRFC', array());

        return parent::getRFC();
    }

    /**
     * {@inheritDoc}
     */
    public function setRFC($RFC)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRFC', array($RFC));

        return parent::setRFC($RFC);
    }

    /**
     * {@inheritDoc}
     */
    public function getNOMBRE()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNOMBRE', array());

        return parent::getNOMBRE();
    }

    /**
     * {@inheritDoc}
     */
    public function setNOMBRE($NOMBRE)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNOMBRE', array($NOMBRE));

        return parent::setNOMBRE($NOMBRE);
    }

    /**
     * {@inheritDoc}
     */
    public function getESTADO()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getESTADO', array());

        return parent::getESTADO();
    }

    /**
     * {@inheritDoc}
     */
    public function setESTADO($ESTADO)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setESTADO', array($ESTADO));

        return parent::setESTADO($ESTADO);
    }

    /**
     * {@inheritDoc}
     */
    public function getMUNICIPIO()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMUNICIPIO', array());

        return parent::getMUNICIPIO();
    }

    /**
     * {@inheritDoc}
     */
    public function setMUNICIPIO($MUNICIPIO)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMUNICIPIO', array($MUNICIPIO));

        return parent::setMUNICIPIO($MUNICIPIO);
    }

    /**
     * {@inheritDoc}
     */
    public function getPAIS()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPAIS', array());

        return parent::getPAIS();
    }

    /**
     * {@inheritDoc}
     */
    public function setPAIS($PAIS)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPAIS', array($PAIS));

        return parent::setPAIS($PAIS);
    }

    /**
     * {@inheritDoc}
     */
    public function getCOLONIA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCOLONIA', array());

        return parent::getCOLONIA();
    }

    /**
     * {@inheritDoc}
     */
    public function setCOLONIA($COLONIA)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCOLONIA', array($COLONIA));

        return parent::setCOLONIA($COLONIA);
    }

    /**
     * {@inheritDoc}
     */
    public function getCALLE()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCALLE', array());

        return parent::getCALLE();
    }

    /**
     * {@inheritDoc}
     */
    public function setCALLE($CALLE)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCALLE', array($CALLE));

        return parent::setCALLE($CALLE);
    }

    /**
     * {@inheritDoc}
     */
    public function getNUM_INT()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNUM_INT', array());

        return parent::getNUM_INT();
    }

    /**
     * {@inheritDoc}
     */
    public function setNUM_INT($NUM_INT)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNUM_INT', array($NUM_INT));

        return parent::setNUM_INT($NUM_INT);
    }

    /**
     * {@inheritDoc}
     */
    public function getNUM_EXT()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNUM_EXT', array());

        return parent::getNUM_EXT();
    }

    /**
     * {@inheritDoc}
     */
    public function setNUM_EXT($NUM_EXT)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNUM_EXT', array($NUM_EXT));

        return parent::setNUM_EXT($NUM_EXT);
    }

    /**
     * {@inheritDoc}
     */
    public function getCP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCP', array());

        return parent::getCP();
    }

    /**
     * {@inheritDoc}
     */
    public function setCP($CP)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCP', array($CP));

        return parent::setCP($CP);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMAIL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMAIL', array());

        return parent::getEMAIL();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMAIL($EMAIL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMAIL', array($EMAIL));

        return parent::setEMAIL($EMAIL);
    }

    /**
     * {@inheritDoc}
     */
    public function getTELEFONO()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTELEFONO', array());

        return parent::getTELEFONO();
    }

    /**
     * {@inheritDoc}
     */
    public function setTELEFONO($TELEFONO)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTELEFONO', array($TELEFONO));

        return parent::setTELEFONO($TELEFONO);
    }

    /**
     * {@inheritDoc}
     */
    public function getTELMOVIL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTELMOVIL', array());

        return parent::getTELMOVIL();
    }

    /**
     * {@inheritDoc}
     */
    public function setTELMOVIL($TELMOVIL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTELMOVIL', array($TELMOVIL));

        return parent::setTELMOVIL($TELMOVIL);
    }

}
