<?php 
namespace CsnUser\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity 
*/
class  Tipospago
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $ID;
    /** @ORM\Column(type="string")*/
    protected $TIPOPAGO;

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
     * @param mixed $ID the 
     *
     * @return self
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Gets the value of TIPOPAGO.
     *
     * @return mixed
     */
    public function getTIPOPAGO()
    {
        return $this->TIPOPAGO;
    }

    /**
     * Sets the value of TIPOPAGO.
     *
     * @param mixed $TIPOPAGO the 
     *
     * @return self
     */
    public function setTIPOPAGO($TIPOPAGO)
    {
        $this->TIPOPAGO = $TIPOPAGO;

        return $this;
    }
}
