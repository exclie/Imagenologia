<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Dependencias {
    /** @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")  
     * @ORM\Column(type="integer")
     */
    protected $ID;

    /** @ORM\Column(type="string") */
    protected $NOMBREDEPENDENCIA;

 

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
     * Gets the value of NOMBREDEPENDENCIA.
     *
     * @return mixed
     */
    public function getNOMBREDEPENDENCIA()
    {
        return $this->NOMBREDEPENDENCIA;
    }
    
    /**
     * Sets the value of NOMBREDEPENDENCIA.
     *
     * @param mixed $NOMBREDEPENDENCIA the no mb re de pe nd en ci a 
     *
     * @return self
     */
    public function setNOMBREDEPENDENCIA($NOMBREDEPENDENCIA)
    {
        $this->NOMBREDEPENDENCIA = $NOMBREDEPENDENCIA;

        return $this;
    }
}