<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Paises {
    /** @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")  
     * @ORM\Column(type="integer")
     */
    protected $ID;
    /** @ORM\Column(type="string") */
    protected $ISO;
    /** @ORM\Column(type="string") */
    protected $NOMBRE;

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
     * Gets the value of ISO.
     *
     * @return mixed
     */
    public function getISO()
    {
        return $this->ISO;
    }
    
    /**
     * Sets the value of ISO.
     *
     * @param mixed $ISO the is o 
     *
     * @return self
     */
    public function setISO($ISO)
    {
        $this->ISO = $ISO;

        return $this;
    }
}