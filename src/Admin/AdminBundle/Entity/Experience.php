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
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=true)
     */
    private $dateAdd;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="USE_id_user", referencedColumnName="id_user")
     * })
     */
    private $useUser;



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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
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
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set idUser
     *
     * @param \Admin\AdminBundle\Entity\User $idUser
     * @return Experience
     */
    public function setIdUser(\Admin\AdminBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Admin\AdminBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set useUser
     *
     * @param \Admin\AdminBundle\Entity\User $useUser
     * @return Experience
     */
    public function setUseUser(\Admin\AdminBundle\Entity\User $useUser = null)
    {
        $this->useUser = $useUser;
    
        return $this;
    }

    /**
     * Get useUser
     *
     * @return \Admin\AdminBundle\Entity\User 
     */
    public function getUseUser()
    {
        return $this->useUser;
    }
    
    public function __toString() {
        return $this->dateAdd.''.$this->idUser.''.$this->useUser;
    }
}