<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/** @ORM\Entity 
*/
class  Consultas
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
      /** @ORM\Column(type="date") */
    protected $FECHA_CONS;
      /** @ORM\Column(type="string") */
    protected $MOTIVO_CONS; 
      /** @ORM\Column(type="string",nullable=true) */
    protected $INFO_MOTIVO;
    /** @ORM\Column(type="string",nullable=true) */
    protected $INFO_ADICIONAL;
      /** @ORM\ManyToOne(targetEntity="Pacientes") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $PACIENTE;
      /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") */
    protected $MEDICO;
     /** @ORM\OneToMany(targetEntity="Consultasub", mappedBy="CONSULTA") */
    protected $CONSULTASUBS;
    
     /**
     * @param string $name
     */
    public function __construct() {
        $this->CONSULTASUBS = new ArrayCollection();
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
     * Gets the value of FECHA_CONS.
     *
     * @return mixed
     */
    public function getFECHA_CONS()
    {
        return $this->FECHA_CONS;
    }
    
    /**
     * Sets the value of FECHA_CONS.
     *
     * @param mixed $FECHA_CONS the fe ch a  co ns 
     *
     * @return self
     */
    public function setFECHA_CONS($FECHA_CONS)
    {
        $this->FECHA_CONS = $FECHA_CONS;

        return $this;
    }

    /**
     * Gets the value of MOTIVO_CONS.
     *
     * @return mixed
     */
    public function getMOTIVO_CONS()
    {
        return $this->MOTIVO_CONS;
    }
    
    /**
     * Sets the value of MOTIVO_CONS.
     *
     * @param mixed $MOTIVO_CONS the mo ti vo  co ns 
     *
     * @return self
     */
    public function setMOTIVO_CONS($MOTIVO_CONS)
    {
        $this->MOTIVO_CONS = $MOTIVO_CONS;

        return $this;
    }

    
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
    public function getMEDICO()
    {
        return $this->MEDICO;
    }
    
    /**
     * Sets the value of MEDICO.
     *
     * @param mixed $MEDICO the me di co 
     *
     * @return self
     */
    public function setMEDICO($MEDICO)
    {
        $this->MEDICO = $MEDICO;

        return $this;
    }

    /**
     * Gets the value of INFO_MOTIVO.
     *
     * @return mixed
     */
    public function getINFO_MOTIVO()
    {
        return $this->INFO_MOTIVO;
    }
    
    /**
     * Sets the value of INFO_MOTIVO.
     *
     * @param mixed $INFO_MOTIVO the in fo  mo ti vo 
     *
     * @return self
     */
    public function setINFO_MOTIVO($INFO_MOTIVO)
    {
        $this->INFO_MOTIVO = $INFO_MOTIVO;

        return $this;
    }

    /**
     * Gets the value of INFO_ADICIONAL.
     *
     * @return mixed
     */
    public function getINFO_ADICIONAL()
    {
        return $this->INFO_ADICIONAL;
    }
    
    /**
     * Sets the value of INFO_ADICIONAL.
     *
     * @param mixed $INFO_ADICIONAL the in fo  ad ic io na l 
     *
     * @return self
     */
    public function setINFO_ADICIONAL($INFO_ADICIONAL)
    {
        $this->INFO_ADICIONAL = $INFO_ADICIONAL;

        return $this;
    }
     public function getCONSULTASUBS()
    {
        return $this->CONSULTASUBS;
    }

    public function addCONSULTASUBS(\CsnUser\Entity\Consultasub $CONSULTASUB)
    {
        $this->CONSULTASUBS[] = $CONSULTASUB;
        return $this;
    }
    /**
     * Get ANTECEDENTES
     *
     * @param Collection
     *
     * @return CIE10
     */
    protected function addCONSULTASUBSS(Collection $CONSULTASUBS)
    {
        foreach ($CONSULTASUBS as $CONSULTASUB) {
            $this->addCONSULTASUBS($CONSULTASUB);
        }

        return $this;
    }
}