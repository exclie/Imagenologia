<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity 
*/
class  Pagoscategorias
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\ManyToOne(targetEntity="Pagos") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $PAGO;
    /** @ORM\ManyToOne(targetEntity="Tiposestudio") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $CATEGORIA;
    /** @ORM\Column(type="float",nullable=true)*/
    protected $CANTIDAD;
    /** @ORM\Column(type="float",nullable=true)*/
    protected $TOTAL;
    /** @ORM\Column(type="float",nullable=true)*/
    protected $DESCUENTO;

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
     * Gets the value of PAGO.
     *
     * @return mixed
     */
    public function getPAGO()
    {
        return $this->PAGO;
    }

    /**
     * Sets the value of PAGO.
     *
     * @param mixed $PAGO the 
     *
     * @return self
     */
    public function setPAGO($PAGO)
    {
        $this->PAGO = $PAGO;

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
     * @param mixed $CATEGORIA the 
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
     * @param mixed $CANTIDAD the 
     *
     * @return self
     */
    public function setCANTIDAD($CANTIDAD)
    {
        $this->CANTIDAD = $CANTIDAD;

        return $this;
    }

    /**
     * Gets the value of DESCUENTO.
     *
     * @return mixed
     */
    public function getDESCUENTO()
    {
        return $this->DESCUENTO;
    }

    /**
     * Sets the value of DESCUENTO.
     *
     * @param mixed $DESCUENTO the 
     *
     * @return self
     */
    public function setDESCUENTO($DESCUENTO)
    {
        $this->DESCUENTO = $DESCUENTO;

        return $this;
    }

    /**
     * Gets the value of TOTAL.
     *
     * @return mixed
     */
    public function getTOTAL()
    {
        return $this->TOTAL;
    }

    /**
     * Sets the value of TOTAL.
     *
     * @param mixed $TOTAL the 
     *
     * @return self
     */
    public function setTOTAL($TOTAL)
    {
        $this->TOTAL = $TOTAL;

        return $this;
    }
}
