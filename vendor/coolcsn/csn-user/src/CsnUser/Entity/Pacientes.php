<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/** @ORM\Entity 
*/
class Pacientes {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\Column(type="string",nullable=true) */
    protected $CURP;
    /** @ORM\Column(type="integer",nullable=true) */
    protected $SEXO;
    /** @ORM\Column(type="string",nullable=true) */
    protected $NOMBRE;
    /** @ORM\Column(type="string",nullable=true) */
    protected $APELLIDO_PATERNO;
    /** @ORM\Column(type="string",nullable=true) */
    protected $APELLIDO_MATERNO;
    /** @ORM\Column(type="date",nullable=false) */
    protected $FECHA_NACIMIENTO;
    /** @ORM\ManyToOne(targetEntity="Nivelessocioeconomicos") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $NIVEL_SOCIOECONOMICO;
    /** @ORM\Column(type="string",nullable=true) */
    protected $OCUPACION;
    /** @ORM\Column(type="integer",nullable=true) */
    protected $EMBARAZO;
    /** @ORM\ManyToOne(targetEntity="Tipossanguineos") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $TIPO_SANGUINEO;
    /** @ORM\ManyToOne(targetEntity="Discapacidades") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $DISCAPACIDAD;
    /** @ORM\ManyToOne(targetEntity="Gruposetnicos") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $GRUPO_ETNICO;
    /** @ORM\ManyToOne(targetEntity="Estados") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $ESTADO;
    /** @ORM\ManyToOne(targetEntity="Religiones") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $RELIGION;
    /** @ORM\ManyToOne(targetEntity="Municipios") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $MUNICIPIO;
    /** @ORM\Column(type="string",nullable=true) */
    protected $CALLE;
    /** @ORM\Column(type="string",nullable=true) */
    protected $NUMERO_EXT;
    /** @ORM\Column(type="string",nullable=true) */
    protected $NUMERO_INT;
    /** @ORM\ManyToOne(targetEntity="Viviendas") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $VIVIENDA;
    /** @ORM\Column(type="integer",nullable=true) */
    protected $CODIGO_POSTAL;
    /** @ORM\Column(type="string",nullable=true) */
    protected $COLONIA;
    /** @ORM\Column(type="string",nullable=true) */
    protected $TELEFONO_1;
    /** @ORM\Column(type="string",nullable=true) */
    protected $TELEFONO_2;
    /** @ORM\Column(type="string",nullable=true) */
    protected $EMAIL;
    /** @ORM\Column(type="string") */
    protected $RFC;
    /** @ORM\Column(type="date") */
    protected $FECHA_REGISTRO;
    /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") */
    protected $USUARIO;
    /**
     * @var Array
     * 
     * @ORM\ManyToMany(targetEntity="CIE10", cascade={"persist"})
     * @ORM\JoinTable(name="ANTECEDENTES_CIE10",
     *      joinColumns={@ORM\JoinColumn(referencedColumnName="ID")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="CIE_id", referencedColumnName="ID")}
     *      )
     */
    protected $ANTECEDENTES;
    /**
     * @var CsnUser\Entity\Pacientesdependencias
     * 
     * @ORM\ManyToMany(targetEntity="Pacientesdependencias", cascade={"merge"}, inversedBy="PACIENTE")
     * @ORM\JoinTable(name="Pacientedependencias",
     *      joinColumns={@ORM\JoinColumn(referencedColumnName="ID")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="DEPENDENCIAS_id", referencedColumnName="ID")}
     *      )
     */
    protected $DEPENDENCIAS;

    public function __construct()
    {
        $this->DEPENDENCIAS = new ArrayCollection();
        $this->ANTECEDENTES = new ArrayCollection();
    }
    // getters/setters
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
     * Gets the value of CURP.
     *
     * @return mixed
     */
    public function getCURP()
    {
        return $this->CURP;
    }
    
    /**
     * Sets the value of CURP.
     *
     * @param mixed $CURP the cu rp 
     *
     * @return self
     */
    public function setCURP($CURP)
    {
        $this->CURP = $CURP;

        return $this;
    }

    /**
     * Gets the value of NOMBRE.
     *
     * @return mixed
     */
    public function getNOMBRE()
    {
        return $this->NOMBRE;
    }
    
    /**
     * Sets the value of NOMBRE.
     *
     * @param mixed $NOMBRE the no mb re 
     *
     * @return self
     */
    public function setNOMBRE($NOMBRE)
    {
        $this->NOMBRE = $NOMBRE;

        return $this;
    }

    /**
     * Gets the value of APELLIDO_PATERNO.
     *
     * @return mixed
     */
    public function getAPELLIDO_PATERNO()
    {
        return $this->APELLIDO_PATERNO;
    }
    
    /**
     * Sets the value of APELLIDO_PATERNO.
     *
     * @param mixed $APELLIDO_PATERNO the ap el li do  pa te rn o 
     *
     * @return self
     */
    public function setAPELLIDO_PATERNO($APELLIDO_PATERNO)
    {
        $this->APELLIDO_PATERNO = $APELLIDO_PATERNO;

        return $this;
    }

    /**
     * Gets the value of APELLIDO_MATERNO.
     *
     * @return mixed
     */
    public function getAPELLIDO_MATERNO()
    {
        return $this->APELLIDO_MATERNO;
    }
    
    /**
     * Sets the value of APELLIDO_MATERNO.
     *
     * @param mixed $APELLIDO_MATERNO the ap el li do  ma te rn o 
     *
     * @return self
     */
    public function setAPELLIDO_MATERNO($APELLIDO_MATERNO)
    {
        $this->APELLIDO_MATERNO = $APELLIDO_MATERNO;

        return $this;
    }

    function setDEPENDENCIAS($DEPENDENCIAS) {
      $this->DEPENDENCIAS = new ArrayCollection();
      $this->DEPENDENCIAS[] = $DEPENDENCIAS;
      return $this;
    }

    /**
     * Gets the value of DEPENDENCIAS.
     *
     * @return mixed
     */
    public function getDEPENDENCIAS()
    {
        return $this->DEPENDENCIAS;
    }

    /**
     * Gets the value of NIVEL_SOCIOECONOMICO.
     *
     * @return mixed
     */
    public function getNIVEL_SOCIOECONOMICO()
    {
        return $this->NIVEL_SOCIOECONOMICO;
    }
    
    /**
     * Sets the value of NIVEL_SOCIOECONOMICO.
     *
     * @param mixed $NIVEL_SOCIOECONOMICO the ni ve l  so ci oe co no mi co 
     *
     * @return self
     */
    public function setNIVEL_SOCIOECONOMICO($NIVEL_SOCIOECONOMICO)
    {
        $this->NIVEL_SOCIOECONOMICO = $NIVEL_SOCIOECONOMICO;

        return $this;
    }

    /**
     * Gets the value of TIPO_SANGUINEO.
     *
     * @return mixed
     */
    public function getTIPO_SANGUINEO()
    {
        return $this->TIPO_SANGUINEO;
    }
    
    /**
     * Sets the value of TIPO_SANGUINEO.
     *
     * @param mixed $TIPO_SANGUINEO the ti po  sa ng ui ne o 
     *
     * @return self
     */
    public function setTIPO_SANGUINEO($TIPO_SANGUINEO)
    {
        $this->TIPO_SANGUINEO = $TIPO_SANGUINEO;

        return $this;
    }

    /**
     * Gets the value of DISCAPACIDAD.
     *
     * @return mixed
     */
    public function getDISCAPACIDAD()
    {
        return $this->DISCAPACIDAD;
    }
    
    /**
     * Sets the value of DISCAPACIDAD.
     *
     * @param mixed $DISCAPACIDAD the di sc ap ac id ad 
     *
     * @return self
     */
    public function setDISCAPACIDAD($DISCAPACIDAD)
    {
        $this->DISCAPACIDAD = $DISCAPACIDAD;

        return $this;
    }

    /**
     * Gets the value of GRUPO_ETNICO.
     *
     * @return mixed
     */
    public function getGRUPO_ETNICO()
    {
        return $this->GRUPO_ETNICO;
    }
    
    /**
     * Sets the value of GRUPO_ETNICO.
     *
     * @param mixed $GRUPO_ETNICO the gr up o  et ni co 
     *
     * @return self
     */
    public function setGRUPO_ETNICO($GRUPO_ETNICO)
    {
        $this->GRUPO_ETNICO = $GRUPO_ETNICO;

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
     * Gets the value of MUNICIPIO.
     *
     * @return mixed
     */
    public function getMUNICIPIO()
    {
        return $this->MUNICIPIO;
    }
    
    /**
     * Sets the value of MUNICIPIO.
     *
     * @param mixed $MUNICIPIO the mu ni ci pi o 
     *
     * @return self
     */
    public function setMUNICIPIO($MUNICIPIO)
    {
        $this->MUNICIPIO = $MUNICIPIO;

        return $this;
    }

    /**
     * Gets the value of CALLE.
     *
     * @return mixed
     */
    public function getCALLE()
    {
        return $this->CALLE;
    }
    
    /**
     * Sets the value of CALLE.
     *
     * @param mixed $CALLE the ca ll e 
     *
     * @return self
     */
    public function setCALLE($CALLE)
    {
        $this->CALLE = $CALLE;

        return $this;
    }

    /**
     * Gets the value of NUMERO_EXT.
     *
     * @return mixed
     */
    public function getNUMERO_EXT()
    {
        return $this->NUMERO_EXT;
    }
    
    /**
     * Sets the value of NUMERO_EXT.
     *
     * @param mixed $NUMERO_EXT the nu me ro  ex t 
     *
     * @return self
     */
    public function setNUMERO_EXT($NUMERO_EXT)
    {
        $this->NUMERO_EXT = $NUMERO_EXT;

        return $this;
    }

    /**
     * Gets the value of NUMERO_INT.
     *
     * @return mixed
     */
    public function getNUMERO_INT()
    {
        return $this->NUMERO_INT;
    }
    
    /**
     * Sets the value of NUMERO_INT.
     *
     * @param mixed $NUMERO_INT the nu me ro  in t 
     *
     * @return self
     */
    public function setNUMERO_INT($NUMERO_INT)
    {
        $this->NUMERO_INT = $NUMERO_INT;

        return $this;
    }

    /**
     * Gets the value of VIVIENDA.
     *
     * @return mixed
     */
    public function getVIVIENDA()
    {
        return $this->VIVIENDA;
    }
    
    /**
     * Sets the value of VIVIENDA.
     *
     * @param mixed $VIVIENDA the vi vi en da 
     *
     * @return self
     */
    public function setVIVIENDA($VIVIENDA)
    {
        $this->VIVIENDA = $VIVIENDA;

        return $this;
    }

    /**
     * Gets the value of CODIGO_POSTAL.
     *
     * @return mixed
     */
    public function getCODIGO_POSTAL()
    {
        return $this->CODIGO_POSTAL;
    }
    
    /**
     * Sets the value of CODIGO_POSTAL.
     *
     * @param mixed $CODIGO_POSTAL the co di go  po st al 
     *
     * @return self
     */
    public function setCODIGO_POSTAL($CODIGO_POSTAL)
    {
        $this->CODIGO_POSTAL = $CODIGO_POSTAL;

        return $this;
    }

    /**
     * Gets the value of COLONIA.
     *
     * @return mixed
     */
    public function getCOLONIA()
    {
        return $this->COLONIA;
    }
    
    /**
     * Sets the value of COLONIA.
     *
     * @param mixed $COLONIA the co lo ni a 
     *
     * @return self
     */
    public function setCOLONIA($COLONIA)
    {
        $this->COLONIA = $COLONIA;

        return $this;
    }

    /**
     * Gets the value of TELEFONO_1.
     *
     * @return mixed
     */
    public function getTELEFONO_1()
    {
        return $this->TELEFONO_1;
    }
    
    /**
     * Sets the value of TELEFONO_1.
     *
     * @param mixed $TELEFONO_1 the te le fo no  1 
     *
     * @return self
     */
    public function setTELEFONO_1($TELEFONO_1)
    {
        $this->TELEFONO_1 = $TELEFONO_1;

        return $this;
    }

    /**
     * Gets the value of TELEFONO_2.
     *
     * @return mixed
     */
    public function getTELEFONO_2()
    {
        return $this->TELEFONO_2;
    }
    
    /**
     * Sets the value of TELEFONO_2.
     *
     * @param mixed $TELEFONO_2 the te le fo no  2 
     *
     * @return self
     */
    public function setTELEFONO_2($TELEFONO_2)
    {
        $this->TELEFONO_2 = $TELEFONO_2;

        return $this;
    }

    /**
     * Get ANTECEDENTES 
     *
     * @return Collection
     */
    public function getANTECEDENTES()
    {
        return $this->ANTECEDENTES;
    }
    
    /**
     * Get ANTECEDENTES
     *
     * @param Collection
     *
     * @return CIE10
     */
    public function addANTECEDENTES(Collection $ANTECEDENTES)
    {
        foreach ($ANTECEDENTES as $ANTECEDENTE) {
            $this->addANTECEDENTE($ANTECEDENTE);
        }

        return $this;
    }
    public function addANTECEDENTE(\CsnUser\Entity\CIE10 $CIE10)
    {
        $this->ANTECEDENTES[] = $CIE10;

        return $this;
    }

    /**
     * Gets the value of FECHA_REGISTRO.
     *
     * @return mixed
     */
    public function getFECHA_REGISTRO()
    {
        return $this->FECHA_REGISTRO;
    }
    
    /**
     * Sets the value of FECHA_REGISTRO.
     *
     * @param mixed $FECHA_REGISTRO the fe ch a  re gi st ro 
     *
     * @return self
     */
    public function setFECHA_REGISTRO($FECHA_REGISTRO)
    {
        $this->FECHA_REGISTRO = $FECHA_REGISTRO;

        return $this;
    }

    /**
     * Gets the value of FECHA_NACIMIENTO.
     *
     * @return mixed
     */
    public function getFECHA_NACIMIENTO()
    {
        return $this->FECHA_NACIMIENTO;
    }
    
    /**
     * Sets the value of FECHA_NACIMIENTO.
     *
     * @param mixed $FECHA_NACIMIENTO the fe ch a  na ci mi en to 
     *
     * @return self
     */
    public function setFECHA_NACIMIENTO($FECHA_NACIMIENTO)
    {
        $this->FECHA_NACIMIENTO = $FECHA_NACIMIENTO;

        return $this;
    }

    /**
     * Gets the value of EMAIL.
     *
     * @return mixed
     */
    public function getEMAIL()
    {
        return $this->EMAIL;
    }
    
    /**
     * Sets the value of EMAIL.
     *
     * @param mixed $EMAIL the em ai l 
     *
     * @return self
     */
    public function setEMAIL($EMAIL)
    {
        $this->EMAIL = $EMAIL;

        return $this;
    }

    /**
     * Gets the value of SEXO.
     *
     * @return mixed
     */
    public function getSEXO()
    {
        return $this->SEXO;
    }
    
    /**
     * Sets the value of SEXO.
     *
     * @param mixed $SEXO the se xo 
     *
     * @return self
     */
    public function setSEXO($SEXO)
    {
        $this->SEXO = $SEXO;

        return $this;
    }

    /**
     * Gets the value of OCUPACION.
     *
     * @return mixed
     */
    public function getOCUPACION()
    {
        return $this->OCUPACION;
    }
    
    /**
     * Sets the value of OCUPACION.
     *
     * @param mixed $OCUPACION the oc up ac io n 
     *
     * @return self
     */
    public function setOCUPACION($OCUPACION)
    {
        $this->OCUPACION = $OCUPACION;

        return $this;
    }

    /**
     * Gets the value of EMBARAZO.
     *
     * @return mixed
     */
    public function getEMBARAZO()
    {
        return $this->EMBARAZO;
    }
    
    /**
     * Sets the value of EMBARAZO.
     *
     * @param mixed $EMBARAZO the em ba ra zo 
     *
     * @return self
     */
    public function setEMBARAZO($EMBARAZO)
    {
        $this->EMBARAZO = $EMBARAZO;

        return $this;
    }

    /**
     * Gets the value of RFC.
     *
     * @return mixed
     */
    public function getRFC()
    {
        return $this->RFC;
    }
    
    /**
     * Sets the value of RFC.
     *
     * @param mixed $RFC the rf c 
     *
     * @return self
     */
    public function setRFC($RFC)
    {
        $this->RFC = $RFC;

        return $this;
    }

    /**
     * Gets the value of CLIENTE.
     *
     * @return mixed
     */
    public function getCLIENTE()
    {
        return $this->CLIENTE;
    }
    
    /**
     * Sets the value of CLIENTE.
     *
     * @param mixed $CLIENTE the cl ie nt e 
     *
     * @return self
     */
    public function setCLIENTE($CLIENTE)
    {
        $this->CLIENTE = $CLIENTE;

        return $this;
    }

    /**
     * Gets the value of APELLIDO_PATERNO.
     *
     * @return mixed
     */
    public function getAPELLIDOPATERNO()
    {
        return $this->APELLIDO_PATERNO;
    }

    /**
     * Sets the value of APELLIDO_PATERNO.
     *
     * @param mixed $APELLIDO_PATERNO the 
     *
     * @return self
     */
    public function setAPELLIDOPATERNO($APELLIDO_PATERNO)
    {
        $this->APELLIDO_PATERNO = $APELLIDO_PATERNO;

        return $this;
    }

    /**
     * Gets the value of APELLIDO_MATERNO.
     *
     * @return mixed
     */
    public function getAPELLIDOMATERNO()
    {
        return $this->APELLIDO_MATERNO;
    }

    /**
     * Sets the value of APELLIDO_MATERNO.
     *
     * @param mixed $APELLIDO_MATERNO the 
     *
     * @return self
     */
    public function setAPELLIDOMATERNO($APELLIDO_MATERNO)
    {
        $this->APELLIDO_MATERNO = $APELLIDO_MATERNO;

        return $this;
    }

    /**
     * Gets the value of FECHA_NACIMIENTO.
     *
     * @return mixed
     */
    public function getFECHANACIMIENTO()
    {
        return $this->FECHA_NACIMIENTO;
    }

    /**
     * Sets the value of FECHA_NACIMIENTO.
     *
     * @param mixed $FECHA_NACIMIENTO the 
     *
     * @return self
     */
    public function setFECHANACIMIENTO($FECHA_NACIMIENTO)
    {
        $this->FECHA_NACIMIENTO = $FECHA_NACIMIENTO;

        return $this;
    }

    /**
     * Gets the value of NIVEL_SOCIOECONOMICO.
     *
     * @return mixed
     */
    public function getNIVELSOCIOECONOMICO()
    {
        return $this->NIVEL_SOCIOECONOMICO;
    }

    /**
     * Sets the value of NIVEL_SOCIOECONOMICO.
     *
     * @param mixed $NIVEL_SOCIOECONOMICO the 
     *
     * @return self
     */
    public function setNIVELSOCIOECONOMICO($NIVEL_SOCIOECONOMICO)
    {
        $this->NIVEL_SOCIOECONOMICO = $NIVEL_SOCIOECONOMICO;

        return $this;
    }

    /**
     * Gets the value of TIPO_SANGUINEO.
     *
     * @return mixed
     */
    public function getTIPOSANGUINEO()
    {
        return $this->TIPO_SANGUINEO;
    }

    /**
     * Sets the value of TIPO_SANGUINEO.
     *
     * @param mixed $TIPO_SANGUINEO the 
     *
     * @return self
     */
    public function setTIPOSANGUINEO($TIPO_SANGUINEO)
    {
        $this->TIPO_SANGUINEO = $TIPO_SANGUINEO;

        return $this;
    }

    /**
     * Gets the value of GRUPO_ETNICO.
     *
     * @return mixed
     */
    public function getGRUPOETNICO()
    {
        return $this->GRUPO_ETNICO;
    }

    /**
     * Sets the value of GRUPO_ETNICO.
     *
     * @param mixed $GRUPO_ETNICO the 
     *
     * @return self
     */
    public function setGRUPOETNICO($GRUPO_ETNICO)
    {
        $this->GRUPO_ETNICO = $GRUPO_ETNICO;

        return $this;
    }

    /**
     * Gets the value of RELIGION.
     *
     * @return mixed
     */
    public function getRELIGION()
    {
        return $this->RELIGION;
    }

    /**
     * Sets the value of RELIGION.
     *
     * @param mixed $RELIGION the 
     *
     * @return self
     */
    public function setRELIGION($RELIGION)
    {
        $this->RELIGION = $RELIGION;

        return $this;
    }

    /**
     * Gets the value of NUMERO_EXT.
     *
     * @return mixed
     */
    public function getNUMEROEXT()
    {
        return $this->NUMERO_EXT;
    }

    /**
     * Sets the value of NUMERO_EXT.
     *
     * @param mixed $NUMERO_EXT the 
     *
     * @return self
     */
    public function setNUMEROEXT($NUMERO_EXT)
    {
        $this->NUMERO_EXT = $NUMERO_EXT;

        return $this;
    }

    /**
     * Gets the value of NUMERO_INT.
     *
     * @return mixed
     */
    public function getNUMEROINT()
    {
        return $this->NUMERO_INT;
    }

    /**
     * Sets the value of NUMERO_INT.
     *
     * @param mixed $NUMERO_INT the 
     *
     * @return self
     */
    public function setNUMEROINT($NUMERO_INT)
    {
        $this->NUMERO_INT = $NUMERO_INT;

        return $this;
    }

    /**
     * Gets the value of CODIGO_POSTAL.
     *
     * @return mixed
     */
    public function getCODIGOPOSTAL()
    {
        return $this->CODIGO_POSTAL;
    }

    /**
     * Sets the value of CODIGO_POSTAL.
     *
     * @param mixed $CODIGO_POSTAL the 
     *
     * @return self
     */
    public function setCODIGOPOSTAL($CODIGO_POSTAL)
    {
        $this->CODIGO_POSTAL = $CODIGO_POSTAL;

        return $this;
    }

    /**
     * Gets the value of TELEFONO_1.
     *
     * @return mixed
     */
    public function getTELEFONO1()
    {
        return $this->TELEFONO_1;
    }

    /**
     * Sets the value of TELEFONO_1.
     *
     * @param mixed $TELEFONO_1 the 1
     *
     * @return self
     */
    public function setTELEFONO1($TELEFONO_1)
    {
        $this->TELEFONO_1 = $TELEFONO_1;

        return $this;
    }

    /**
     * Gets the value of TELEFONO_2.
     *
     * @return mixed
     */
    public function getTELEFONO2()
    {
        return $this->TELEFONO_2;
    }

    /**
     * Sets the value of TELEFONO_2.
     *
     * @param mixed $TELEFONO_2 the 2
     *
     * @return self
     */
    public function setTELEFONO2($TELEFONO_2)
    {
        $this->TELEFONO_2 = $TELEFONO_2;

        return $this;
    }

    /**
     * Gets the value of FECHA_REGISTRO.
     *
     * @return mixed
     */
    public function getFECHAREGISTRO()
    {
        return $this->FECHA_REGISTRO;
    }

    /**
     * Sets the value of FECHA_REGISTRO.
     *
     * @param mixed $FECHA_REGISTRO the 
     *
     * @return self
     */
    public function setFECHAREGISTRO($FECHA_REGISTRO)
    {
        $this->FECHA_REGISTRO = $FECHA_REGISTRO;

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
}