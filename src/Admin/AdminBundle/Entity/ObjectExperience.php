<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectExperience
 *
 * @ORM\Table(name="object_experience")
 * @ORM\Entity
 */
class ObjectExperience
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_experience", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExperience;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;



    /**
     * Set idExperience
     *
     * @param integer $idExperience
     * @return ObjectExperience
     */
    public function setIdExperience($idExperience)
    {
        $this->idExperience = $idExperience;
    
        return $this;
    }

    /**
     * Get idExperience
     *
     * @return integer 
     */
    public function getIdExperience()
    {
        return $this->idExperience;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return ObjectExperience
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}