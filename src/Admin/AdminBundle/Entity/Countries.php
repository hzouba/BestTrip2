<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=254, nullable=true)
     */
    private $names;

 
 
    /**
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry() {
        return $this->idCountry;
    }


    /**
     * Set names
     *
     * @param string $names
     * @return Countries
     */
    public function setNames($names) {
        $this->names = $names;

        return $this;
    }
   
    public function __toString() {
            return (string)$this->names;
        }
    /**
     * Get names
     *
     * @return string 
     */
    public function getNames() {
        return $this->names;
    }

    

}
