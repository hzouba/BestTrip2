<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalizedGuide
 *
 * @ORM\Table(name="personalized_guide")
 * @ORM\Entity
 */
class PersonalizedGuide {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_guide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGuide;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=254, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=254, nullable=true)
     */
    private $path;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="\Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * Get idGuide
     *
     * @return integer 
     */
    public function getIdGuide() {
        return $this->idGuide;
    }

    /**
     * Set idUser
     *
     * @param \Application\Sonata\UserBundle\Entity\User $id
     * @return PersonalizedGuide
     */
    public function setIdUser(\Application\Sonata\UserBundle\Entity\User $id = null)
    {
        $this->idUser = $id;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PersonalizedGuide
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return PersonalizedGuide
     */
    public function setPath($path) {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return PersonalizedGuide
     */
    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    public function __toString() {
        return $this->name;
    }

}
