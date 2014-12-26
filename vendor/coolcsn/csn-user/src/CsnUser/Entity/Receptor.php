<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Receptor {
    /** @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")  
     * @ORM\Column(type="integer")
     */
    protected $ID;

    /** @ORM\Column(type="string") */
    protected $RFC;
    
    /** @ORM\Column(type="string") */
    protected $NOMBRE;

    /** @ORM\ManyToOne(targetEntity="Estados") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $ESTADO;

    /** @ORM\ManyToOne(targetEntity="Municipios") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $MUNICIPIO;

    /** @ORM\ManyToOne(targetEntity="Paises") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $PAIS;

    /** @ORM\Column(type="string",nullable=true) */
    protected $COLONIA;

    /** @ORM\Column(type="string",nullable=true) */
    protected $CALLE;

    /** @ORM\Column(type="string",nullable=true) */
    protected $NUM_INT;

    /** @ORM\Column(type="string",nullable=true) */
    protected $NUM_EXT;

    /** @ORM\Column(type="integer",nullable=true) */
    protected $CP;

    /** @ORM\Column(type="string",nullable=true) */
    protected $EMAIL;

    /** @ORM\Column(type="string",nullable=true) */
    protected $TELEFONO;

    /** @ORM\Column(type="string",nullable=true) */
    protected $TELMOVIL;

    

    /**
     * Gets the value of ID.
     *
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }
    
    /**
     * Sets the value of ID.
     *
     * @param mixed $ID the id 
     *
     * @return self
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Gets the value of RFC.
     *
     * @return mixed
     */
    public function getRFC()
    {
        return $this->RFC;
    }
    
    /**
     * Sets the value of RFC.
     *
     * @param mixed $RFC the rf c 
     *
     * @return self
     */
    public function setRFC($RFC)
    {
        $this->RFC = $RFC;

        return $this;
    }

    /**
     * Gets the value of NOMBRE.
     *
     * @return mixed
     */
    public function getNOMBRE()
    {
        return $this->NOMBRE;
    }
    
    /**
     * Sets the value of NOMBRE.
     *
     * @param mixed $NOMBRE the no mb re 
     *
     * @return self
     */
    public function setNOMBRE($NOMBRE)
    {
        $this->NOMBRE = $NOMBRE;

        return $this;
    }

    /**
     * Gets the value of ESTADO.
     *
     * @return mixed
     */
    public function getESTADO()
    {
        return $this->ESTADO;
    }
    
    /**
     * Sets the value of ESTADO.
     *
     * @param mixed $ESTADO the es ta do 
     *
     * @return self
     */
    public function setESTADO($ESTADO)
    {
        $this->ESTADO = $ESTADO;

        return $this;
    }

    /**
     * Gets the value of MUNICIPIO.
     *
     * @return mixed
     */
    public function getMUNICIPIO()
    {
        return $this->MUNICIPIO;
    }
    
    /**
     * Sets the value of MUNICIPIO.
     *
     * @param mixed $MUNICIPIO the mu ni ci pi o 
     *
     * @return self
     */
    public function setMUNICIPIO($MUNICIPIO)
    {
        $this->MUNICIPIO = $MUNICIPIO;

        return $this;
    }

    /**
     * Gets the value of PAIS.
     *
     * @return mixed
     */
    public function getPAIS()
    {
        return $this->PAIS;
    }
    
    /**
     * Sets the value of PAIS.
     *
     * @param mixed $PAIS the pa is 
     *
     * @return self
     */
    public function setPAIS($PAIS)
    {
        $this->PAIS = $PAIS;

        return $this;
    }

    /**
     * Gets the value of COLONIA.
     *
     * @return mixed
     */
    public function getCOLONIA()
    {
        return $this->COLONIA;
    }
    
    /**
     * Sets the value of COLONIA.
     *
     * @param mixed $COLONIA the co lo ni a 
     *
     * @return self
     */
    public function setCOLONIA($COLONIA)
    {
        $this->COLONIA = $COLONIA;

        return $this;
    }

    /**
     * Gets the value of CALLE.
     *
     * @return mixed
     */
    public function getCALLE()
    {
        return $this->CALLE;
    }
    
    /**
     * Sets the value of CALLE.
     *
     * @param mixed $CALLE the ca ll e 
     *
     * @return self
     */
    public function setCALLE($CALLE)
    {
        $this->CALLE = $CALLE;

        return $this;
    }

    /**
     * Gets the value of NUM_INT.
     *
     * @return mixed
     */
    public function getNUM_INT()
    {
        return $this->NUM_INT;
    }
    
    /**
     * Sets the value of NUM_INT.
     *
     * @param mixed $NUM_INT the nu m  in t 
     *
     * @return self
     */
    public function setNUM_INT($NUM_INT)
    {
        $this->NUM_INT = $NUM_INT;

        return $this;
    }

    /**
     * Gets the value of NUM_EXT.
     *
     * @return mixed
     */
    public function getNUM_EXT()
    {
        return $this->NUM_EXT;
    }
    
    /**
     * Sets the value of NUM_EXT.
     *
     * @param mixed $NUM_EXT the nu m  ex t 
     *
     * @return self
     */
    public function setNUM_EXT($NUM_EXT)
    {
        $this->NUM_EXT = $NUM_EXT;

        return $this;
    }

    /**
     * Gets the value of CP.
     *
     * @return mixed
     */
    public function getCP()
    {
        return $this->CP;
    }
    
    /**
     * Sets the value of CP.
     *
     * @param mixed $CP the cp 
     *
     * @return self
     */
    public function setCP($CP)
    {
        $this->CP = $CP;

        return $this;
    }

    /**
     * Gets the value of EMAIL.
     *
     * @return mixed
     */
    public function getEMAIL()
    {
        return $this->EMAIL;
    }
    
    /**
     * Sets the value of EMAIL.
     *
     * @param mixed $EMAIL the em ai l 
     *
     * @return self
     */
    public function setEMAIL($EMAIL)
    {
        $this->EMAIL = $EMAIL;

        return $this;
    }

    /**
     * Gets the value of TELEFONO.
     *
     * @return mixed
     */
    public function getTELEFONO()
    {
        return $this->TELEFONO;
    }
    
    /**
     * Sets the value of TELEFONO.
     *
     * @param mixed $TELEFONO the te le fo no 
     *
     * @return self
     */
    public function setTELEFONO($TELEFONO)
    {
        $this->TELEFONO = $TELEFONO;

        return $this;
    }

    /**
     * Gets the value of TELMOVIL.
     *
     * @return mixed
     */
    public function getTELMOVIL()
    {
        return $this->TELMOVIL;
    }
    
    /**
     * Sets the value of TELMOVIL.
     *
     * @param mixed $TELMOVIL the te lm ov il 
     *
     * @return self
     */
    public function setTELMOVIL($TELMOVIL)
    {
        $this->TELMOVIL = $TELMOVIL;

        return $this;
    }
}