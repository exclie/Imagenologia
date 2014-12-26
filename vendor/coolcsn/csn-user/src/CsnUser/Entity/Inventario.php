<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/** @ORM\Entity 
*/
class Inventario {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\Column(type="string") */
    protected $MATERIAL;
    /** @ORM\Column(type="string") */
    protected $PROVEEDOR;
    /** @ORM\Column(type="integer") */
    protected $CANTIDAD;
    /** @ORM\Column(type="float") */
    protected $PRECIO;
    /** @ORM\Column(type="date",nullable=true) */
    protected $FECHACADUCIDAD;
    /** @ORM\Column(type="integer") */
    protected $CANTIDADMIN;
    /** @ORM\Column(type="boolean") */
    protected $ACTIVO = 1;

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
     * Gets the value of MATERIAL.
     *
     * @return mixed
     */
    public function getMATERIAL()
    {
        return $this->MATERIAL;
    }
    
    /**
     * Sets the value of MATERIAL.
     *
     * @param mixed $MATERIAL the ma te ri al 
     *
     * @return self
     */
    public function setMATERIAL($MATERIAL)
    {
        $this->MATERIAL = $MATERIAL;

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
     * Gets the value of CANTIDADMIN.
     *
     * @return mixed
     */
    public function getCANTIDADMIN()
    {
        return $this->CANTIDADMIN;
    }
    
    /**
     * Sets the value of CANTIDADMIN.
     *
     * @param mixed $CANTIDADMIN the ca nt id ad mi n 
     *
     * @return self
     */
    public function setCANTIDADMIN($CANTIDADMIN)
    {
        $this->CANTIDADMIN = $CANTIDADMIN;

        return $this;
    }

    /**
     * Gets the value of FECHACADUCIDAD.
     *
     * @return mixed
     */
    public function getFECHACADUCIDAD()
    {
        return $this->FECHACADUCIDAD;
    }

    /**
     * Sets the value of FECHACADUCIDAD.
     *
     * @param mixed $FECHACADUCIDAD the 
     *
     * @return self
     */
    public function setFECHACADUCIDAD($FECHACADUCIDAD)
    {
        $this->FECHACADUCIDAD = $FECHACADUCIDAD;

        return $this;
    }

    /**
     * Gets the value of PROVEEDOR.
     *
     * @return mixed
     */
    public function getPROVEEDOR()
    {
        return $this->PROVEEDOR;
    }

    /**
     * Sets the value of PROVEEDOR.
     *
     * @param mixed $PROVEEDOR the 
     *
     * @return self
     */
    public function setPROVEEDOR($PROVEEDOR)
    {
        $this->PROVEEDOR = $PROVEEDOR;

        return $this;
    }

    /**
     * Gets the value of PRECIO.
     *
     * @return mixed
     */
    public function getPRECIO()
    {
        return $this->PRECIO;
    }

    /**
     * Sets the value of PRECIO.
     *
     * @param mixed $PRECIO the 
     *
     * @return self
     */
    public function setPRECIO($PRECIO)
    {
        $this->PRECIO = $PRECIO;

        return $this;
    }

    /**
     * Gets the value of ACTIVO.
     *
     * @return mixed
     */
    public function getACTIVO()
    {
        return $this->ACTIVO;
    }

    /**
     * Sets the value of ACTIVO.
     *
     * @param mixed $ACTIVO the 
     *
     * @return self
     */
    public function setACTIVO($ACTIVO)
    {
        $this->ACTIVO = $ACTIVO;

        return $this;
    }
}