<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedback
 *
 * @ORM\Table(name="feedback")
 * @ORM\Entity
 */
class Feedback
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
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_experience", type="integer", nullable=false)
     */
    private $idExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=254, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="raiting", type="integer", nullable=true)
     */
    private $raiting;



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
     * Set idUser
     *
     * @param integer $idUser
     * @return Feedback
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
     * Set idExperience
     *
     * @param integer $idExperience
     * @return Feedback
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
     * Set comment
     *
     * @param string $comment
     * @return Feedback
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set raiting
     *
     * @param integer $raiting
     * @return Feedback
     */
    public function setRaiting($raiting)
    {
        $this->raiting = $raiting;
    
        return $this;
    }

    /**
     * Get raiting
     *
     * @return integer 
     */
    public function getRaiting()
    {
        return $this->raiting;
    }
}