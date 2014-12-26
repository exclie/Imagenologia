<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class EstudioMaterial {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\ManyToOne(targetEntity="Estudios") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $ESTUDIO;
    /** @ORM\ManyToOne(targetEntity="Inventario") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $INVENTARIO;
    /** @ORM\ManyToOne(targetEntity="Tiposestudio") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $CATEGORIA;
    /** @ORM\Column(type="integer") */
    protected $CANTIDAD;
     /** @ORM\Column(type="string",nullable=true) */
    protected $RAZON;


    /**
     * Gets the value of INVENTARIO.
     *
     * @return mixed
     */
    public function getINVENTARIO()
    {
        return $this->INVENTARIO;
    }
    
    /**
     * Sets the value of INVENTARIO.
     *
     * @param mixed $INVENTARIO the in ve nt ar io 
     *
     * @return self
     */
    public function setINVENTARIO($INVENTARIO)
    {
        $this->INVENTARIO = $INVENTARIO;

        return $this;
    }

    /**
     * Gets the value of CATEGORIA.
     *
     * @return mixed
     */
    public function getCATEGORIA()
    {
        return $this->CATEGORIA;
    }
    
    /**
     * Sets the value of CATEGORIA.
     *
     * @param mixed $CATEGORIA the ca te go ri a 
     *
     * @return self
     */
    public function setCATEGORIA($CATEGORIA)
    {
        $this->CATEGORIA = $CATEGORIA;

        return $this;
    }

    /**
     * Gets the value of CANTIDAD.
     *
     * @return mixed
     */
    public function getCANTIDAD()
    {
        return $this->CANTIDAD;
    }
    
    /**
     * Sets the value of CANTIDAD.
     *
     * @param mixed $CANTIDAD the ca nt id ad 
     *
     * @return self
     */
    public function setCANTIDAD($CANTIDAD)
    {
        $this->CANTIDAD = $CANTIDAD;

        return $this;
    }

    /**
     * Gets the value of ESTUDIO.
     *
     * @return mixed
     */
    public function getESTUDIO()
    {
        return $this->ESTUDIO;
    }
    
    /**
     * Sets the value of ESTUDIO.
     *
     * @param mixed $ESTUDIO the es tu di o 
     *
     * @return self
     */
    public function setESTUDIO($ESTUDIO)
    {
        $this->ESTUDIO = $ESTUDIO;

        return $this;
    }

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
     * @param mixed $ID the 
     *
     * @return self
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Gets the value of RAZON.
     *
     * @return mixed
     */
    public function getRAZON()
    {
        return $this->RAZON;
    }

    /**
     * Sets the value of RAZON.
     *
     * @param mixed $RAZON the 
     *
     * @return self
     */
    public function setRAZON($RAZON)
    {
        $this->RAZON = $RAZON;

        return $this;
    }
}