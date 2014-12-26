<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Inventarioestudio {
    /** @ORM\ManyToOne(targetEntity="Inventario") @ORM\JoinColumn(referencedColumnName="ID") 
    * @ORM\Id
    */
    protected $INVENTARIO;
    /** @ORM\ManyToOne(targetEntity="Tiposestudio") @ORM\JoinColumn(referencedColumnName="ID") 
    * @ORM\Id
    */
    protected $CATEGORIA;
    /** @ORM\Column(type="integer") */
    protected $CANTIDAD;


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
}