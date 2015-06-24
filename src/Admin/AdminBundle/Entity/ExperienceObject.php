<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExperienceObject
 *
 * @ORM\Table(name="experience_object")
 * @ORM\Entity
 */
class ExperienceObject
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="string", length=254, nullable=true)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=254, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=254, nullable=true)
     */
    private $video;

    /**
     * @var \TypeObject
     *
     * @ORM\ManyToOne(targetEntity="TypeObject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_object_type", referencedColumnName="id_object_type")
     * })
     */
    private $idObjectType;

    /**
     * @var \Experience
     *
     * @ORM\ManyToOne(targetEntity="Experience")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_experience", referencedColumnName="id_experience")
     * })
     */
    private $idExperience;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ExperienceObject
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cost
     *
     * @param string $cost
     * @return ExperienceObject
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    
        return $this;
    }

    /**
     * Get cost
     *
     * @return string 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return ExperienceObject
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return ExperienceObject
     */
    public function setVideo($video)
    {
        $this->video = $video;
    
        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set idObjectType
     *
     * @param \Admin\AdminBundle\Entity\TypeObject $idObjectType
     * @return ExperienceObject
     */
    public function setIdObjectType(\Admin\AdminBundle\Entity\TypeObject $idObjectType = null)
    {
        $this->idObjectType = $idObjectType;
    
        return $this;
    }

    /**
     * Get idObjectType
     *
     * @return \Admin\AdminBundle\Entity\TypeObject 
     */
    public function getIdObjectType()
    {
        return $this->idObjectType;
    }

    /**
     * Set idExperience
     *
     * @param \Admin\AdminBundle\Entity\Experience $idExperience
     * @return ExperienceObject
     */
    public function setIdExperience(\Admin\AdminBundle\Entity\Experience $idExperience = null)
    {
        $this->idExperience = $idExperience;
    
        return $this;
    }

    /**
     * Get idExperience
     *
     * @return \Admin\AdminBundle\Entity\Experience 
     */
    public function getIdExperience()
    {
        return $this->idExperience;
    }
    
}