<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeObject
 *
 * @ORM\Table(name="type_object")
 * @ORM\Entity
 */
class TypeObject
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_object_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObjectType;

    /**
     * @var string
     *
     * @ORM\Column(name="object_name", type="string", length=254, nullable=true)
     */
    private $objectName;



    /**
     * Get idObjectType
     *
     * @return integer 
     */
    public function getIdObjectType()
    {
        return $this->idObjectType;
    }

    /**
     * Set objectName
     *
     * @param string $objectName
     * @return TypeObject
     */
    public function setObjectName($objectName)
    {
        $this->objectName = $objectName;
    
        return $this;
    }

    /**
     * Get objectName
     *
     * @return string 
     */
    public function getObjectName()
    {
        return $this->objectName;
    }
    
    public function __toString() {
        return $this->objectName;
    }
}