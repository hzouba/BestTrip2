<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity
 */
class Experience
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_experience", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=254, nullable=true)
     */
    private $name;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date_add", type="date", nullable=true)
     */
    private $dateAdd;

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
     * @var integer
     *
     * @ORM\Column(name="isValid", type="integer", nullable=false)
     */
    private $isValid;

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
     * Set name
     *
     * @param string $name
     * @return Experience
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dateAdd
     *
     * @param \Date $dateAdd
     * @return Experience
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;
    
        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \Date
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set idUser
     *
     * @param \Application\Sonata\UserBundle\Entity\User $id
     * @return Experience
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
     * Set isValid
     *
     * @param integer $name
     * @return Experience
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;
    
        return $this;
    }

    /**
     * Get isValid
     *
     * @return integer 
     */
    public function getIsValid()
    {
        return $this->isValid;
    }
    
    public function __toString() {
        return $this->name.''.$this->dateAdd.''.$this->idUser;
    }
}