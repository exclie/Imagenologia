<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity 
*/
class  Pagos
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\ManyToOne(targetEntity="Estudios") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $ESTUDIO;
    /** @ORM\Column(type="float",nullable=true)*/
    protected $CANTIDAD;
    /** @ORM\Column(type="float",nullable=true)*/
    protected $IVA;
    /** @ORM\Column(type="float",nullable=true)*/
    protected $IMPORTE;
    /** @ORM\Column(type="float",nullable=true)*/
    protected $CAMBIO;
    /** @ORM\Column(type="date",nullable=true)*/
    protected $FECHA_APROBACION;
    /** @ORM\Column(type="date",nullable=true)*/
    protected $FECHA;
    /** @ORM\Column(type="string",nullable=true)*/
    protected $SERVICIOAD;
    /** @ORM\Column(type="float",nullable=true)*/
    protected $MONTOSERV;
    /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") */
    protected $USUARIO;

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
     * @param mixed $ESTUDIO the 
     *
     * @return self
     */
    public function setESTUDIO($ESTUDIO)
    {
        $this->ESTUDIO = $ESTUDIO;

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
     * Gets the value of IVA.
     *
     * @return mixed
     */
    public function getIVA()
    {
        return $this->IVA;
    }

    /**
     * Sets the value of IVA.
     *
     * @param mixed $IVA the 
     *
     * @return self
     */
    public function setIVA($IVA)
    {
        $this->IVA = $IVA;

        return $this;
    }

    /**
     * Gets the value of FECHA_APROBACION.
     *
     * @return mixed
     */
    public function getFECHAAPROBACION()
    {
        return $this->FECHA_APROBACION;
    }

    /**
     * Sets the value of FECHA_APROBACION.
     *
     * @param mixed $FECHA_APROBACION the 
     *
     * @return self
     */
    public function setFECHAAPROBACION($FECHA_APROBACION)
    {
        $this->FECHA_APROBACION = $FECHA_APROBACION;

        return $this;
    }

    /**
     * Gets the value of FECHA.
     *
     * @return mixed
     */
    public function getFECHA()
    {
        return $this->FECHA;
    }

    /**
     * Sets the value of FECHA.
     *
     * @param mixed $FECHA the 
     *
     * @return self
     */
    public function setFECHA($FECHA)
    {
        $this->FECHA = $FECHA;

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
     * Gets the value of IMPORTE.
     *
     * @return mixed
     */
    public function getIMPORTE()
    {
        return $this->IMPORTE;
    }

    /**
     * Sets the value of IMPORTE.
     *
     * @param mixed $IMPORTE the 
     *
     * @return self
     */
    public function setIMPORTE($IMPORTE)
    {
        $this->IMPORTE = $IMPORTE;

        return $this;
    }

    /**
     * Gets the value of CAMBIO.
     *
     * @return mixed
     */
    public function getCAMBIO()
    {
        return $this->CAMBIO;
    }

    /**
     * Sets the value of CAMBIO.
     *
     * @param mixed $CAMBIO the 
     *
     * @return self
     */
    public function setCAMBIO($CAMBIO)
    {
        $this->CAMBIO = $CAMBIO;

        return $this;
    }

    /**
     * Gets the value of USUARIO.
     *
     * @return mixed
     */
    public function getUSUARIO()
    {
        return $this->USUARIO;
    }

    /**
     * Sets the value of USUARIO.
     *
     * @param mixed $USUARIO the 
     *
     * @return self
     */
    public function setUSUARIO($USUARIO)
    {
        $this->USUARIO = $USUARIO;

        return $this;
    }
  

    /**
     * Gets the value of SERVICIOAD.
     *
     * @return mixed
     */
    public function getSERVICIOAD()
    {
        return $this->SERVICIOAD;
    }

    /**
     * Sets the value of SERVICIOAD.
     *
     * @param mixed $SERVICIOAD the 
     *
     * @return self
     */
    public function setSERVICIOAD($SERVICIOAD)
    {
        $this->SERVICIOAD = $SERVICIOAD;

        return $this;
    }

    /**
     * Gets the value of MONTOSERV.
     *
     * @return mixed
     */
    public function getMONTOSERV()
    {
        return $this->MONTOSERV;
    }

    /**
     * Sets the value of MONTOSERV.
     *
     * @param mixed $MONTOSERV the 
     *
     * @return self
     */
    public function setMONTOSERV($MONTOSERV)
    {
        $this->MONTOSERV = $MONTOSERV;

        return $this;
    }
}
