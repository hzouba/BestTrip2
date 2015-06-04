<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalizedGuide
 *
 * @ORM\Table(name="personalized_guide")
 * @ORM\Entity
 */
class PersonalizedGuide
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_guide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGuide;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;



    /**
     * Get idGuide
     *
     * @return integer 
     */
    public function getIdGuide()
    {
        return $this->idGuide;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return PersonalizedGuide
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return PersonalizedGuide
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}