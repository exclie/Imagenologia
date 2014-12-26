<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Consultaimagenes {
    /** @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")  
     * @ORM\Column(type="integer")
     */
    protected $ID;
    /** @ORM\ManyToOne(targetEntity="Consultas") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $CONSULTA;
    /** @ORM\ManyToOne(targetEntity="Consultasub") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $CONSULTASUB;
    /** @ORM\ManyToOne(targetEntity="Pacientes") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $PACIENTE;
    /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") */
    protected $MEDICO;
    /** @ORM\Column(type="string") */
    protected $IMAGEN;
    
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
     * Gets the value of CONSULTA.
     *
     * @return mixed
     */
    public function getCONSULTA()
    {
        return $this->CONSULTA;
    }
    
    /**
     * Sets the value of CONSULTA.
     *
     * @param mixed $CONSULTA the co ns ul ta 
     *
     * @return self
     */
    public function setCONSULTA($CONSULTA)
    {
        $this->CONSULTA = $CONSULTA;

        return $this;
    }

    /**
     * Gets the value of CONSULTASUB.
     *
     * @return mixed
     */
    public function getCONSULTASUB()
    {
        return $this->CONSULTASUB;
    }
    
    /**
     * Sets the value of CONSULTASUB.
     *
     * @param mixed $CONSULTASUB the co ns ul ta su b 
     *
     * @return self
     */
    public function setCONSULTASUB($CONSULTASUB)
    {
        $this->CONSULTASUB = $CONSULTASUB;

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
     * @param mixed $PACIENTE the pa ci en te 
     *
     * @return self
     */
    public function setPACIENTE($PACIENTE)
    {
        $this->PACIENTE = $PACIENTE;

        return $this;
    }

    /**
     * Gets the value of IMAGEN.
     *
     * @return mixed
     */
    public function getIMAGEN()
    {
        return $this->IMAGEN;
    }
    
    /**
     * Sets the value of IMAGEN.
     *
     * @param mixed $IMAGEN the im ag en 
     *
     * @return self
     */
    public function setIMAGEN($IMAGEN)
    {
        $this->IMAGEN = $IMAGEN;

        return $this;
    }
    /**
     * Gets the value of IMAGEN.
     *
     * @return mixed
     */
    public function getMEDICO()
    {
        return $this->MEDICO;
    }
    
    /**
     * Sets the value of IMAGEN.
     *
     * @param mixed $IMAGEN the im ag en 
     *
     * @return self
     */
    public function setMEDICO($MEDICO)
    {
        $this->MEDICO = $MEDICO;

        return $this;
    }
}