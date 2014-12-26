<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/** @ORM\Entity 
*/
class InventarioEstudios {
    /** @ORM\ManyToOne(targetEntity="Estudios") @ORM\JoinColumn(referencedColumnName="ID") 
     * @ORM\Id
    */
    protected $ESTUDIO;
    /** @ORM\ManyToOne(targetEntity="Inventario") @ORM\JoinColumn(referencedColumnName="ID") 
     * @ORM\Id
    */
    protected $MATERIAL;
    /** @ORM\Column(type="integer") */
    protected $CANTIDAD;


    /**
     * Gets the value of ESTUDIO.
     *
     * @return mixed
     */
    public function getESTUDIO()
    {
        return $this->ESTUDIO;
    }
    
    /**
     * Sets the value of ESTUDIO.
     *
     * @param mixed $ESTUDIO the es tu di o 
     *
     * @return self
     */
    public function setESTUDIO($ESTUDIO)
    {
        $this->ESTUDIO = $ESTUDIO;

        return $this;
    }

    /**
     * Gets the value of MATERIAL.
     *
     * @return mixed
     */
    public function getMATERIAL()
    {
        return $this->MATERIAL;
    }
    
    /**
     * Sets the value of MATERIAL.
     *
     * @param mixed $MATERIAL the ma te ri al 
     *
     * @return self
     */
    public function setMATERIAL($MATERIAL)
    {
        $this->MATERIAL = $MATERIAL;

        return $this;
    }

    /**
     * Gets the value of CANTIDAD.
     *
     * @return mixed
     */
    public function getCANTIDAD()
    {
        return $this->CANTIDAD;
    }
    
    /**
     * Sets the value of CANTIDAD.
     *
     * @param mixed $CANTIDAD the ca nt id ad 
     *
     * @return self
     */
    public function setCANTIDAD($CANTIDAD)
    {
        $this->CANTIDAD = $CANTIDAD;

        return $this;
    }
}