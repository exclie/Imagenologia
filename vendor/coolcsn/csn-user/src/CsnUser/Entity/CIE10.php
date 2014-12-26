<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity 
*/
class CIE10 {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\Column(type="string",nullable=true) */
    protected $CIE_NUMERO;
    /** @ORM\Column(type="string",nullable=true) */
    protected $NOMBRE_ENFERMEDAD;
    /** @ORM\Column(type="string",nullable=true) */
    protected $TIPO;

    

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
     * Gets the value of CIE_NUMERO.
     *
     * @return mixed
     */
    public function getCIE_NUMERO()
    {
        return $this->CIE_NUMERO;
    }
    
    /**
     * Sets the value of CIE_NUMERO.
     *
     * @param mixed $CIE_NUMERO the ci e  nu me ro 
     *
     * @return self
     */
    public function setCIE_NUMERO($CIE_NUMERO)
    {
        $this->CIE_NUMERO = $CIE_NUMERO;

        return $this;
    }

    /**
     * Gets the value of NOMBRE_ENFERMEDAD.
     *
     * @return mixed
     */
    public function getNOMBRE_ENFERMEDAD()
    {
        return $this->NOMBRE_ENFERMEDAD;
    }
    
    /**
     * Sets the value of NOMBRE_ENFERMEDAD.
     *
     * @param mixed $NOMBRE_ENFERMEDAD the no mb re  en fe rm ed ad 
     *
     * @return self
     */
    public function setNOMBRE_ENFERMEDAD($NOMBRE_ENFERMEDAD)
    {
        $this->NOMBRE_ENFERMEDAD = $NOMBRE_ENFERMEDAD;

        return $this;
    }

    /**
     * Gets the value of TIPO.
     *
     * @return mixed
     */
    public function getTIPO()
    {
        return $this->TIPO;
    }
    
    /**
     * Sets the value of TIPO.
     *
     * @param mixed $TIPO the ti po 
     *
     * @return self
     */
    public function setTIPO($TIPO)
    {
        $this->TIPO = $TIPO;

        return $this;
    }
}