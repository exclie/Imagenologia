<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity 
*/
class  AuxDiagnostico
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\ManyToOne(targetEntity="Consultasub") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $CONSULTASUB;
  /** @ORM\Column(type="string") */
    protected $TIPO_ESTUDIO;
      /** @ORM\Column(type="string",nullable=true)*/
    protected $DIAGNOSTICO;
    /** @ORM\Column(type="string",nullable=true) */
    protected $URGENCIA;
    /** @ORM\Column(type="string",nullable=true) */
    protected $INDICACIONES;
    /** @ORM\Column(type="date",nullable=true) */
    protected $FECHA;


 

    
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
    protected function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Gets the value of TIPO_ESTUDIO.
     *
     * @return mixed
     */
    public function getTIPO_ESTUDIO()
    {
        return $this->TIPO_ESTUDIO;
    }
    
    /**
     * Sets the value of TIPO_ESTUDIO.
     *
     * @param mixed $TIPO_ESTUDIO the ti po  es tu di o 
     *
     * @return self
     */
    protected function setTIPO_ESTUDIO($TIPO_ESTUDIO)
    {
        $this->TIPO_ESTUDIO = $TIPO_ESTUDIO;

        return $this;
    }

    /**
     * Gets the value of DIAGNOSTICO.
     *
     * @return mixed
     */
    public function getDIAGNOSTICO()
    {
        return $this->DIAGNOSTICO;
    }
    
    /**
     * Sets the value of DIAGNOSTICO.
     *
     * @param mixed $DIAGNOSTICO the di ag no st ic o 
     *
     * @return self
     */
    protected function setDIAGNOSTICO($DIAGNOSTICO)
    {
        $this->DIAGNOSTICO = $DIAGNOSTICO;

        return $this;
    }

    /**
     * Gets the value of URGENCIA.
     *
     * @return mixed
     */
    public function getURGENCIA()
    {
        return $this->URGENCIA;
    }
    
    /**
     * Sets the value of URGENCIA.
     *
     * @param mixed $URGENCIA the ur ge nc ia 
     *
     * @return self
     */
    protected function setURGENCIA($URGENCIA)
    {
        $this->URGENCIA = $URGENCIA;

        return $this;
    }

    /**
     * Gets the value of INDICACIONES.
     *
     * @return mixed
     */
    public function getINDICACIONES()
    {
        return $this->INDICACIONES;
    }
    
    /**
     * Sets the value of INDICACIONES.
     *
     * @param mixed $INDICACIONES the in di ca ci on es 
     *
     * @return self
     */
    protected function setINDICACIONES($INDICACIONES)
    {
        $this->INDICACIONES = $INDICACIONES;

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
     * @param mixed $FECHA the fe ch a 
     *
     * @return self
     */
    protected function setFECHA($FECHA)
    {
        $this->FECHA = $FECHA;

        return $this;
    }
}
