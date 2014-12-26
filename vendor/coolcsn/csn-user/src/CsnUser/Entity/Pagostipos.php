<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity 
*/
class  Pagostipos
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\ManyToOne(targetEntity="Pagos") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $PAGO;
    /** @ORM\ManyToOne(targetEntity="Tipospago") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $TIPOPAGO;
    /** @ORM\Column(type="float",nullable=true)*/
    protected $MONTO;
    /** @ORM\Column(type="string",nullable=true)*/
    protected $NUMCUENTA;
    /** @ORM\Column(type="string",nullable=true)*/
    protected $BANCO;
    /** @ORM\Column(type="string",nullable=true)*/
    protected $REFERENCIA;
    /** @ORM\Column(type="string",nullable=true)*/
    protected $SPEI;

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
     * Gets the value of TIPOPAGO.
     *
     * @return mixed
     */
    public function getTIPOPAGO()
    {
        return $this->TIPOPAGO;
    }

    /**
     * Sets the value of TIPOPAGO.
     *
     * @param mixed $TIPOPAGO the 
     *
     * @return self
     */
    public function setTIPOPAGO($TIPOPAGO)
    {
        $this->TIPOPAGO = $TIPOPAGO;

        return $this;
    }

    /**
     * Gets the value of MONTO.
     *
     * @return mixed
     */
    public function getMONTO()
    {
        return $this->MONTO;
    }

    /**
     * Sets the value of MONTO.
     *
     * @param mixed $MONTO the 
     *
     * @return self
     */
    public function setMONTO($MONTO)
    {
        $this->MONTO = $MONTO;

        return $this;
    }

    /**
     * Gets the value of NUMCUENTA.
     *
     * @return mixed
     */
    public function getNUMCUENTA()
    {
        return $this->NUMCUENTA;
    }

    /**
     * Sets the value of NUMCUENTA.
     *
     * @param mixed $NUMCUENTA the 
     *
     * @return self
     */
    public function setNUMCUENTA($NUMCUENTA)
    {
        $this->NUMCUENTA = $NUMCUENTA;

        return $this;
    }

    /**
     * Gets the value of BANCO.
     *
     * @return mixed
     */
    public function getBANCO()
    {
        return $this->BANCO;
    }

    /**
     * Sets the value of BANCO.
     *
     * @param mixed $BANCO the 
     *
     * @return self
     */
    public function setBANCO($BANCO)
    {
        $this->BANCO = $BANCO;

        return $this;
    }

    /**
     * Gets the value of REFERENCIA.
     *
     * @return mixed
     */
    public function getREFERENCIA()
    {
        return $this->REFERENCIA;
    }

    /**
     * Sets the value of REFERENCIA.
     *
     * @param mixed $REFERENCIA the 
     *
     * @return self
     */
    public function setREFERENCIA($REFERENCIA)
    {
        $this->REFERENCIA = $REFERENCIA;

        return $this;
    }

    /**
     * Gets the value of SPEI.
     *
     * @return mixed
     */
    public function getSPEI()
    {
        return $this->SPEI;
    }

    /**
     * Sets the value of SPEI.
     *
     * @param mixed $SPEI the 
     *
     * @return self
     */
    public function setSPEI($SPEI)
    {
        $this->SPEI = $SPEI;

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
}
