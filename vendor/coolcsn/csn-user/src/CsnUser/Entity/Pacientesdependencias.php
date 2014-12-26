<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Pacientesdependencias {
    /** @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")  
     * @ORM\Column(type="integer")
     */
    protected $ID;
    /** @ORM\ManyToOne(targetEntity="Dependencias") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $DEPENDENCIA;
    /** @ORM\Column(type="string") */
    protected $AFILIACION;
    /** @ORM\ManyToMany(targetEntity="Pacientes", mappedBy="DEPENDENCIAS") */
    protected $PACIENTE;
    
    

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
     * Gets the value of DEPENDENCIA.
     *
     * @return mixed
     */
    public function getDEPENDENCIA()
    {
        return $this->DEPENDENCIA;
    }

    /**
     * Sets the value of DEPENDENCIA.
     *
     * @param mixed $DEPENDENCIA the 
     *
     * @return self
     */
    public function setDEPENDENCIA($DEPENDENCIA)
    {
        $this->DEPENDENCIA = $DEPENDENCIA;

        return $this;
    }

    /**
     * Gets the value of AFILIACION.
     *
     * @return mixed
     */
    public function getAFILIACION()
    {
        return $this->AFILIACION;
    }

    /**
     * Sets the value of AFILIACION.
     *
     * @param mixed $AFILIACION the 
     *
     * @return self
     */
    public function setAFILIACION($AFILIACION)
    {
        $this->AFILIACION = $AFILIACION;

        return $this;
    }

    /**
     * Gets the value of PACIENTE.
     *
     * @return mixed
     */
    public function getPACIENTE()
    {
        return $this->PACIENTE;
    }

    /**
     * Sets the value of PACIENTE.
     *
     * @param mixed $PACIENTE the 
     *
     * @return self
     */
    protected function setPACIENTE($PACIENTE)
    {
        $this->PACIENTE = $PACIENTE;

        return $this;
    }
}