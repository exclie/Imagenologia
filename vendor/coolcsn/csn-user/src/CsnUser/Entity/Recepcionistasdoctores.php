<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Recepcionistasdoctores {
    /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") 
    *   @ORM\Id
    */
    protected $RECEPCIONISTA;
    /** @ORM\ManyToOne(targetEntity="User") @ORM\JoinColumn(referencedColumnName="id") 
    *   @ORM\Id
    */
    protected $DOCTOR;

    /**
     * Gets the value of RECEPCIONISTA.
     *
     * @return mixed
     */
    public function getRECEPCIONISTA()
    {
        return $this->RECEPCIONISTA;
    }
    
    /**
     * Sets the value of RECEPCIONISTA.
     *
     * @param mixed $RECEPCIONISTA the re ce pc io ni st a 
     *
     * @return self
     */
    public function setRECEPCIONISTA($RECEPCIONISTA)
    {
        $this->RECEPCIONISTA = $RECEPCIONISTA;

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
}