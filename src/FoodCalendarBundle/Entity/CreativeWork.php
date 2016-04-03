<?php

namespace FoodCalendarBundle\Entity;

use ApiPlatform\Core\Annotation\Property;
use ApiPlatform\Core\Annotation\Resource;
use Doctrine\ORM\Mapping as ORM;

/**
 * The most generic kind of creative work, including books, movies, photographs, software programs, etc.
 * 
 * @see http://schema.org/CreativeWork Documentation on Schema.org
 * 
 * @ORM\Entity
 * @Resource(iri="http://schema.org/CreativeWork")
 */
class CreativeWork
{
    /**
     * @var int
     * 
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var Person The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     * 
     * @ORM\OneToOne(targetEntity="FoodCalendarBundle\Entity\Person")
     * @Property(iri="http://schema.org/creator")
     */
    private $creator;

    /**
     * Sets id.
     * 
     * @param int $id
     * 
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets id.
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets creator.
     * 
     * @param Person $creator
     * 
     * @return $this
     */
    public function setCreator(Person $creator = null)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Gets creator.
     * 
     * @return Person
     */
    public function getCreator()
    {
        return $this->creator;
    }
}
