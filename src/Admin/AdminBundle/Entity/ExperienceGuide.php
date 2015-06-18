<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExperienceGuide
 *
 * @ORM\Table(name="experience_guide")
 * @ORM\Entity
 */
class ExperienceGuide
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_guide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idGuide;

    /**
     * @var \Experience
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Experience")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_experience", referencedColumnName="id_experience")
     * })
     */
    private $idExperience;



    /**
     * Set idGuide
     *
     * @param integer $idGuide
     * @return ExperienceGuide
     */
    public function setIdGuide($idGuide)
    {
        $this->idGuide = $idGuide;
    
        return $this;
    }

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
     * Set idExperience
     *
     * @param \Admin\AdminBundle\Entity\Experience $idExperience
     * @return ExperienceGuide
     */
    public function setIdExperience(\Admin\AdminBundle\Entity\Experience $idExperience)
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