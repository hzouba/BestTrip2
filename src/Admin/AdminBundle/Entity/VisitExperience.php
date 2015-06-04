<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VisitExperience
 *
 * @ORM\Table(name="visit_experience")
 * @ORM\Entity
 */
class VisitExperience
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_visitor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idVisitor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_experience", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExperience;



    /**
     * Set idVisitor
     *
     * @param integer $idVisitor
     * @return VisitExperience
     */
    public function setIdVisitor($idVisitor)
    {
        $this->idVisitor = $idVisitor;
    
        return $this;
    }

    /**
     * Get idVisitor
     *
     * @return integer 
     */
    public function getIdVisitor()
    {
        return $this->idVisitor;
    }

    /**
     * Set idExperience
     *
     * @param integer $idExperience
     * @return VisitExperience
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
}