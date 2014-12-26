<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/** @ORM\Entity 
*/
class Estudios {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\ManyToOne(targetEntity="Pacientes") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $PACIENTE;
    /** @ORM\Column(type="date",nullable=true) */
    protected $FECHA;
    /** @ORM\Column(type="string",nullable=true) */
    protected $PACIENTE_NR;
     /**
     * @var Array
     * 
     * @ORM\ManyToMany(targetEntity="Tiposestudio", cascade={"persist"})
     * @ORM\JoinTable(name="Estudioscategorias",
     *      joinColumns={@ORM\JoinColumn(referencedColumnName="ID")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="TIPO_id", referencedColumnName="ID")}
     *      )
     */
    protected $TIPOS;
    /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") */
    protected $DOCTOR;
    /** @ORM\ManyToOne(targetEntity="Estadosestudios") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $ESTADO;
    /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") */
    protected $USUARIO;
    /** @ORM\ManyToOne(targetEntity="Doctores") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $DOCTORENV;
    /** @ORM\ManyToOne(targetEntity="Agendas") @ORM\JoinColumn(referencedColumnName="id") */
    protected $EVENTO;
    /** @ORM\Column(type="boolean") */
    protected $REVISION = false;
    /** @ORM\Column(type="string",length=60000,nullable=true) */
    protected $INTERPRETACION;
    /** @ORM\Column(type="integer", nullable=true) */
    protected $PAGADO = 0;
    /** @ORM\Column(type="string", length=32, nullable=true) */
    protected $PDFTOKEN;
    /** @ORM\Column(type="string", length=32, nullable=true) */
    protected $FOLIORECETA;
    /** @ORM\Column(type="string", length=32, nullable=true) */
    protected $FECHARECETA;
    /** @ORM\ManyToOne(targetEntity="Dependencias") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $DEPENDENCIA;
    /** @ORM\ManyToOne(targetEntity="Receptor") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $RECEPTOR;

    public function __construct()
    {
        $this->TIPOS = new ArrayCollection();
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
     * Gets the value of PACIENTE.
     *
     * @return mixed
     */
    public function getPACIENTE()
    {
        return $this->PACIENTE;
    }
    
    /**
     * Gets the value of EVENTO.
     *
     * @return mixed
     */
    public function getEVENTO()
    {
        return $this->EVENTO;
    }
    
    /**
     * Sets the value of EVENTO.
     *
     * @param mixed $EVENTO the evento
     *
     * @return self
     */
    public function setEVENTO($EVENTO)
    {
        $this->EVENTO = $EVENTO;

        return $this;
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
    public function setFECHA($FECHA)
    {
        $this->FECHA = $FECHA;

        return $this;
    }

    /**
     * Get TIPOS 
     *
     * @return Collection
     */
    public function getTIPOS()
    {
        return $this->TIPOS;
    }
    
    /**
     * Get TIPOS
     *
     * @param Collection
     *
     * @return CIE10
     */
    public function addTIPOS(Collection $TIPOS)
    {
        foreach ($TIPOS as $TIPO) {
            $this->addTIPO($TIPO);
         }

        return $this;
    }
    public function addTIPO(\CsnUser\Entity\Tiposestudio $CATEGORIA)
    {
        $this->TIPOS[] = $CATEGORIA;
        return $this;
    }
    public function removeTIPO(\CsnUser\Entity\Tiposestudio $CATEGORIA)
    {
        $this->TIPOS->removeElement($CATEGORIA);
        return $this;
    }
    /**
     * Gets the value of DOCTOR.
     *
     * @return mixed
     */
    public function getDOCTOR()
    {
        return $this->DOCTOR;
    }
    
    /**
     * Sets the value of DOCTOR.
     *
     * @param mixed $DOCTOR the do ct or 
     *
     * @return self
     */
    public function setDOCTOR($DOCTOR)
    {
        $this->DOCTOR = $DOCTOR;

        return $this;
    }

    /**
     * Gets the value of ESTADO.
     *
     * @return mixed
     */
    public function getESTADO()
    {
        return $this->ESTADO;
    }
    
    /**
     * Sets the value of ESTADO.
     *
     * @param mixed $ESTADO the es ta do 
     *
     * @return self
     */
    public function setESTADO($ESTADO)
    {
        $this->ESTADO = $ESTADO;

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
     * @param mixed $USUARIO the us ua ri o 
     *
     * @return self
     */
    public function setUSUARIO($USUARIO)
    {
        $this->USUARIO = $USUARIO;

        return $this;
    }


    /**
     * Gets the value of DOCTORENV.
     *
     * @return mixed
     */
    public function getDOCTORENV()
    {
        return $this->DOCTORENV;
    }
    
    /**
     * Sets the value of DOCTORENV.
     *
     * @param mixed $DOCTORENV the do ct or en v 
     *
     * @return self
     */
    public function setDOCTORENV($DOCTORENV)
    {
        $this->DOCTORENV = $DOCTORENV;

        return $this;
    }

    /**
     * Gets the value of INTERPRETACION.
     *
     * @return mixed
     */
    public function getINTERPRETACION()
    {
        return $this->INTERPRETACION;
    }
    
    /**
     * Sets the value of INTERPRETACION.
     *
     * @param mixed $INTERPRETACION the in te rp re ta ci on 
     *
     * @return self
     */
    public function setINTERPRETACION($INTERPRETACION)
    {
        $this->INTERPRETACION = $INTERPRETACION;

        return $this;
    }

    /**
     * Gets the value of REVISION.
     *
     * @return mixed
     */
    public function getREVISION()
    {
        return $this->REVISION;
    }
    
    /**
     * Sets the value of REVISION.
     *
     * @param mixed $REVISION the re vi si on 
     *
     * @return self
     */
    public function setREVISION($REVISION)
    {
        $this->REVISION = $REVISION;

        return $this;
    }

    /**
     * Gets the value of PDFTOKEN.
     *
     * @return mixed
     */
    public function getPDFTOKEN()
    {
        return $this->PDFTOKEN;
    }

    /**
     * Sets the value of PDFTOKEN.
     *
     * @param mixed $PDFTOKEN the 
     *
     * @return self
     */
    public function setPDFTOKEN($PDFTOKEN)
    {
        $this->PDFTOKEN = $PDFTOKEN;

        return $this;
    }

    /**
     * Gets the value of PACIENTE_NR.
     *
     * @return mixed
     */
    public function getPACIENTENR()
    {
        return $this->PACIENTE_NR;
    }

    /**
     * Sets the value of PACIENTE_NR.
     *
     * @param mixed $PACIENTE_NR the 
     *
     * @return self
     */
    public function setPACIENTENR($PACIENTE_NR)
    {
        $this->PACIENTE_NR = $PACIENTE_NR;

        return $this;
    }

    /**
     * Gets the value of FOLIORECETA.
     *
     * @return mixed
     */
    public function getFOLIORECETA()
    {
        return $this->FOLIORECETA;
    }

    /**
     * Sets the value of FOLIORECETA.
     *
     * @param mixed $FOLIORECETA the 
     *
     * @return self
     */
    public function setFOLIORECETA($FOLIORECETA)
    {
        $this->FOLIORECETA = $FOLIORECETA;

        return $this;
    }

    /**
     * Gets the value of FECHARECETA.
     *
     * @return mixed
     */
    public function getFECHARECETA()
    {
        return $this->FECHARECETA;
    }

    /**
     * Sets the value of FECHARECETA.
     *
     * @param mixed $FECHARECETA the 
     *
     * @return self
     */
    public function setFECHARECETA($FECHARECETA)
    {
        $this->FECHARECETA = $FECHARECETA;

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
     * Gets the value of RECEPTOR.
     *
     * @return mixed
     */
    public function getRECEPTOR()
    {
        return $this->RECEPTOR;
    }

    /**
     * Sets the value of RECEPTOR.
     *
     * @param mixed $RECEPTOR the 
     *
     * @return self
     */
    public function setRECEPTOR($RECEPTOR)
    {
        $this->RECEPTOR = $RECEPTOR;

        return $this;
    }

    /**
     * Gets the value of PAGADO.
     *
     * @return mixed
     */
    public function getPAGADO()
    {
        return $this->PAGADO;
    }

    /**
     * Sets the value of PAGADO.
     *
     * @param mixed $PAGADO the 
     *
     * @return self
     */
    public function setPAGADO($PAGADO)
    {
        $this->PAGADO = $PAGADO;

        return $this;
    }
}