<?php

namespace DoctrineORMModule\Proxy\__CG__\CsnUser\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Doctores extends \CsnUser\Entity\Doctores implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'ID', 'NOMBRE', 'APELLIDO1', 'APELLIDO2', 'ESPECIALIDAD', 'EMAIL', 'DEPENDENCIA', 'TELEFONO');
        }

        return array('__isInitialized__', 'ID', 'NOMBRE', 'APELLIDO1', 'APELLIDO2', 'ESPECIALIDAD', 'EMAIL', 'DEPENDENCIA', 'TELEFONO');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Doctores $proxy) {
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
    public function getAPELLIDO1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAPELLIDO1', array());

        return parent::getAPELLIDO1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAPELLIDO1($APELLIDO1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAPELLIDO1', array($APELLIDO1));

        return parent::setAPELLIDO1($APELLIDO1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAPELLIDO2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAPELLIDO2', array());

        return parent::getAPELLIDO2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAPELLIDO2($APELLIDO2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAPELLIDO2', array($APELLIDO2));

        return parent::setAPELLIDO2($APELLIDO2);
    }

    /**
     * {@inheritDoc}
     */
    public function getESPECIALIDAD()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getESPECIALIDAD', array());

        return parent::getESPECIALIDAD();
    }

    /**
     * {@inheritDoc}
     */
    public function setESPECIALIDAD($ESPECIALIDAD)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setESPECIALIDAD', array($ESPECIALIDAD));

        return parent::setESPECIALIDAD($ESPECIALIDAD);
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
    public function getDEPENDENCIA()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDEPENDENCIA', array());

        return parent::getDEPENDENCIA();
    }

    /**
     * {@inheritDoc}
     */
    public function setDEPENDENCIA($DEPENDENCIA)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDEPENDENCIA', array($DEPENDENCIA));

        return parent::setDEPENDENCIA($DEPENDENCIA);
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

}
