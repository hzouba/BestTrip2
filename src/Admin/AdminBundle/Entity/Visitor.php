<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visitor
 *
 * @ORM\Table(name="visitor")
 * @ORM\Entity
 */
class Visitor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_visitor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVisitor;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=254, nullable=true)
     */
    private $mail;



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
     * Set mail
     *
     * @param string $mail
     * @return Visitor
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
}