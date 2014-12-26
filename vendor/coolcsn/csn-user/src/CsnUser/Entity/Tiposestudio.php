<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Tiposestudio {
    /** @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")  
     * @ORM\Column(type="integer")
     */
    protected $ID;
    /** @ORM\Column(type="string") */
    protected $NOMBRECATEGORIA;
    /** @ORM\ManyToOne(targetEntity="Dependencias") @ORM\JoinColumn(referencedColumnName="ID") */
    protected $DEPENDENCIA;
    /** @ORM\Column(type="float") */
    protected $COSTO;
    /** @ORM\Column(type="string",length=60000,nullable=true) */
    protected $RECOMENDACION;
    /** @ORM\ManyToMany(targetEntity="Agendas", mappedBy="tipo") */
    protected $eventos;
    /** @ORM\Column(type="boolean") */
    protected $ACTIVO = 1;
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
     * Gets the value of NOMBRECATEGORIA.
     *
     * @return mixed
     */
    public function getNOMBRECATEGORIA()
    {
        return $this->NOMBRECATEGORIA;
    }
    
    /**
     * Sets the value of NOMBRECATEGORIA.
     *
     * @param mixed $NOMBRECATEGORIA the no mb re ca te go ri a 
     *
     * @return self
     */
    public function setNOMBRECATEGORIA($NOMBRECATEGORIA)
    {
        $this->NOMBRECATEGORIA = $NOMBRECATEGORIA;

        return $this;
    }

    /**
     * Gets the value of COSTO.
     *
     * @return mixed
     */
    public function getCOSTO()
    {
        return $this->COSTO;
    }
    
    /**
     * Sets the value of COSTO.
     *
     * @param mixed $COSTO the co st o 
     *
     * @return self
     */
    public function setCOSTO($COSTO)
    {
        $this->COSTO = $COSTO;

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
     * Gets the value of eventos.
     *
     * @return mixed
     */
    public function getEventos()
    {
        return $this->eventos;
    }

    /**
     * Sets the value of eventos.
     *
     * @param mixed $eventos the eventos
     *
     * @return self
     */
    protected function setEventos($eventos)
    {
        $this->eventos = $eventos;

        return $this;
    }

    /**
     * Gets the value of ACTIVO.
     *
     * @return mixed
     */
    public function getACTIVO()
    {
        return $this->ACTIVO;
    }

    /**
     * Sets the value of ACTIVO.
     *
     * @param mixed $ACTIVO the 
     *
     * @return self
     */
    public function setACTIVO($ACTIVO)
    {
        $this->ACTIVO = $ACTIVO;

        return $this;
    }

    /**
     * Gets the value of RECOMENDACION.
     *
     * @return mixed
     */
    public function getRECOMENDACION()
    {
        return $this->RECOMENDACION;
    }

    /**
     * Sets the value of RECOMENDACION.
     *
     * @param mixed $RECOMENDACION the 
     *
     * @return self
     */
    public function setRECOMENDACION($RECOMENDACION)
    {
        $this->RECOMENDACION = $RECOMENDACION;

        return $this;
    }
}