<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/** @ORM\Entity 
*/
class  Consultasub
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;

  /** @ORM\Column(type="date") */
    protected $FECHA_SUB;
      /** @ORM\Column(type="string",nullable=true) */
    protected $FC;
      /** @ORM\Column(type="string",nullable=true) */
    protected $FR;
      /** @ORM\Column(type="string",nullable=true) */
    protected $TA;
      /** @ORM\Column(type="string",nullable=true) */
    protected $PS;
      /** @ORM\Column(type="string",nullable=true) */
    protected $T;
      /** @ORM\Column(type="string",nullable=true) */
    protected $ALTURA;
      /** @ORM\Column(type="decimal",nullable=true) */
    protected $PESO;
      /** @ORM\Column(type="decimal",nullable=true) */
    protected $IMC;
      /** @ORM\Column(type="string",nullable=true) */
    protected $SUBJETIVO;
     /** @ORM\Column(type="string",nullable=true) */
    protected $OBJETIVO;
      /** @ORM\Column(type="string",nullable=true) */
    protected $ANALISIS;
      /** @ORM\Column(type="string",nullable=true) */
    protected $PLAN;
    /**
     * @var Array
     * 
     * @ORM\ManyToMany(targetEntity="CIE10", cascade={"persist"})
     * @ORM\JoinTable(name="DIAGNOSTICOS_CIE10",
     *      joinColumns={@ORM\JoinColumn(referencedColumnName="ID")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="CIE_id", referencedColumnName="ID")}
     *      )
     */
    protected $DIAGNOSTICOS;
      /** @ORM\Column(type="string",nullable=true) */
    protected $TRATAMIETO;
     /** @ORM\Column(type="string",nullable=true) */
    protected $DOCTOR_RECOMENDADO;
    /** @ORM\ManyToOne(targetEntity="Consultas", inversedBy="CONSULTASUBS") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $CONSULTA;
    /** @ORM\ManyToOne(targetEntity="AuxDiagnostico") @ORM\JoinColumn(referencedColumnName="ID") */
    /** @ORM\Column(type="integer",nullable=true) */
    protected $DIAGNISTICO_AUX;
    /** @ORM\ManyToOne(targetEntity="Recetas") @ORM\JoinColumn(referencedColumnName="ID_RECETA") */
    /** @ORM\Column(type="integer",nullable=true) */
    protected $RECETA;
    /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") */
    protected $MEDICO;

    public function __construct()
    {
        $this->DIAGNOSTICOS = new ArrayCollection();
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
     * Gets the value of FECHA_SUB.
     *
     * @return mixed
     */
    public function getFECHA_SUB()
    {
        return $this->FECHA_SUB;
    }
    
    /**
     * Sets the value of FECHA_SUB.
     *
     * @param mixed $FECHA_SUB the fe ch a  su b 
     *
     * @return self
     */
    public function setFECHA_SUB($FECHA_SUB)
    {
        $this->FECHA_SUB = $FECHA_SUB;

        return $this;
    }

    /**
     * Gets the value of FC.
     *
     * @return mixed
     */
    public function getFC()
    {
        return $this->FC;
    }
    
    /**
     * Sets the value of FC.
     *
     * @param mixed $FC the fc 
     *
     * @return self
     */
    public function setFC($FC)
    {
        $this->FC = $FC;

        return $this;
    }

    /**
     * Gets the value of FR.
     *
     * @return mixed
     */
    public function getFR()
    {
        return $this->FR;
    }
    
    /**
     * Sets the value of FR.
     *
     * @param mixed $FR the fr 
     *
     * @return self
     */
    public function setFR($FR)
    {
        $this->FR = $FR;

        return $this;
    }

    /**
     * Gets the value of TA.
     *
     * @return mixed
     */
    public function getTA()
    {
        return $this->TA;
    }
    
    /**
     * Sets the value of TA.
     *
     * @param mixed $TA the ta 
     *
     * @return self
     */
    public function setTA($TA)
    {
        $this->TA = $TA;

        return $this;
    }

    /**
     * Gets the value of PS.
     *
     * @return mixed
     */
    public function getPS()
    {
        return $this->PS;
    }
    
    /**
     * Sets the value of PS.
     *
     * @param mixed $PS the ps 
     *
     * @return self
     */
    public function setPS($PS)
    {
        $this->PS = $PS;

        return $this;
    }

    /**
     * Gets the value of T.
     *
     * @return mixed
     */
    public function getT()
    {
        return $this->T;
    }
    
    /**
     * Sets the value of T.
     *
     * @param mixed $T the t 
     *
     * @return self
     */
    public function setT($T)
    {
        $this->T = $T;

        return $this;
    }

    /**
     * Gets the value of ALTURA.
     *
     * @return mixed
     */
    public function getALTURA()
    {
        return $this->ALTURA;
    }
    
    /**
     * Sets the value of ALTURA.
     *
     * @param mixed $ALTURA the al tu ra 
     *
     * @return self
     */
    public function setALTURA($ALTURA)
    {
        $this->ALTURA = $ALTURA;

        return $this;
    }

    /**
     * Gets the value of PESO.
     *
     * @return mixed
     */
    public function getPESO()
    {
        return $this->PESO;
    }
    
    /**
     * Sets the value of PESO.
     *
     * @param mixed $PESO the pe so 
     *
     * @return self
     */
    public function setPESO($PESO)
    {
        $this->PESO = $PESO;

        return $this;
    }

    /**
     * Gets the value of IMC.
     *
     * @return mixed
     */
    public function getIMC()
    {
        return $this->IMC;
    }
    
    /**
     * Sets the value of IMC.
     *
     * @param mixed $IMC the im c 
     *
     * @return self
     */
    public function setIMC($IMC)
    {
        $this->IMC = $IMC;

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

    /**
     * Gets the value of SUBJETIVO.
     *
     * @return mixed
     */
    public function getSUBJETIVO()
    {
        return $this->SUBJETIVO;
    }
    
    /**
     * Sets the value of SUBJETIVO.
     *
     * @param mixed $SUBJETIVO the su bj et iv o 
     *
     * @return self
     */
    public function setSUBJETIVO($SUBJETIVO)
    {
        $this->SUBJETIVO = $SUBJETIVO;

        return $this;
    }

    /**
     * Gets the value of OBJETIVO.
     *
     * @return mixed
     */
    public function getOBJETIVO()
    {
        return $this->OBJETIVO;
    }
    
    /**
     * Sets the value of OBJETIVO.
     *
     * @param mixed $OBJETIVO the ob je ti vo 
     *
     * @return self
     */
    public function setOBJETIVO($OBJETIVO)
    {
        $this->OBJETIVO = $OBJETIVO;

        return $this;
    }

    /**
     * Gets the value of ANALISIS.
     *
     * @return mixed
     */
    public function getANALISIS()
    {
        return $this->ANALISIS;
    }
    
    /**
     * Sets the value of ANALISIS.
     *
     * @param mixed $ANALISIS the an al is is 
     *
     * @return self
     */
    public function setANALISIS($ANALISIS)
    {
        $this->ANALISIS = $ANALISIS;

        return $this;
    }

    /**
     * Gets the value of PLAN.
     *
     * @return mixed
     */
    public function getPLAN()
    {
        return $this->PLAN;
    }
    
    /**
     * Sets the value of PLAN.
     *
     * @param mixed $PLAN the pl an 
     *
     * @return self
     */
    public function setPLAN($PLAN)
    {
        $this->PLAN = $PLAN;

        return $this;
    }

    /**
     * Get ANTECEDENTES 
     *
     * @return Collection
     */
    public function getDIAGNOSTICOS()
    {
        return $this->DIAGNOSTICOS;
    }

    public function addDIAGNOSTICO(\CsnUser\Entity\CIE10 $CIE10)
    {
        $this->DIAGNOSTICOS[] = $CIE10;
        return $this;
    }
    /**
     * Get ANTECEDENTES
     *
     * @param Collection
     *
     * @return CIE10
     */
    protected function addDIAGNOSTICOS(Collection $DIAGNOSTICOS)
    {
        foreach ($DIAGNOSTICOS as $DIAGNOSTICO) {
            $this->addDIAGNOSTICO($DIAGNOSTICO);
        }

        return $this;
    }

    /**
     * Gets the value of TRATAMIETO.
     *
     * @return mixed
     */
    public function getTRATAMIETO()
    {
        return $this->TRATAMIETO;
    }
    
    /**
     * Sets the value of TRATAMIETO.
     *
     * @param mixed $TRATAMIETO the tr at am ie to 
     *
     * @return self
     */
    public function setTRATAMIETO($TRATAMIETO)
    {
        $this->TRATAMIETO = $TRATAMIETO;

        return $this;
    }

    /**
     * Gets the value of DOCTOR_RECOMENDADO.
     *
     * @return mixed
     */
    public function getDOCTOR_RECOMENDADO()
    {
        return $this->DOCTOR_RECOMENDADO;
    }
    
    /**
     * Sets the value of DOCTOR_RECOMENDADO.
     *
     * @param mixed $DOCTOR_RECOMENDADO the do ct or  re co me nd ad o 
     *
     * @return self
     */
    public function setDOCTOR_RECOMENDADO($DOCTOR_RECOMENDADO)
    {
        $this->DOCTOR_RECOMENDADO = $DOCTOR_RECOMENDADO;

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
     * Gets the value of DIAGNISTICO_AUX.
     *
     * @return mixed
     */
    public function getDIAGNISTICO_AUX()
    {
        return $this->DIAGNISTICO_AUX;
    }
    
    /**
     * Sets the value of DIAGNISTICO_AUX.
     *
     * @param mixed $DIAGNISTICO_AUX the di ag ni st ic o  au x 
     *
     * @return self
     */
    public function setDIAGNISTICO_AUX($DIAGNISTICO_AUX)
    {
        $this->DIAGNISTICO_AUX = $DIAGNISTICO_AUX;

        return $this;
    }

    /**
     * Gets the value of RECETA.
     *
     * @return mixed
     */
    public function getRECETA()
    {
        return $this->RECETA;
    }
    
    /**
     * Sets the value of RECETA.
     *
     * @param mixed $RECETA the re ce ta 
     *
     * @return self
     */
    public function setRECETA($RECETA)
    {
        $this->RECETA = $RECETA;

        return $this;
    }
}