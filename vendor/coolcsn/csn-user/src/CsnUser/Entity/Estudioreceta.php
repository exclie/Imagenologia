<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Estudioreceta {
    /** @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")  
     * @ORM\Column(type="integer")
     */
    protected $ID;
    /** @ORM\ManyToOne(targetEntity="Estudios") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $ESTUDIO;
    /** @ORM\ManyToOne(targetEntity="Pacientes") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $PACIENTE;
    /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") */
    protected $USUARIO;
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
     * Gets the value of MEDICO.
     *
     * @return mixed
     */
    public function getUSUARIO()
    {
        return $this->USUARIO;
    }
    
    /**
     * Sets the value of MEDICO.
     *
     * @param mixed $MEDICO the me di co 
     *
     * @return self
     */
    public function setUSUARIO($USUARIO)
    {
        $this->USUARIO = $USUARIO;

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
}