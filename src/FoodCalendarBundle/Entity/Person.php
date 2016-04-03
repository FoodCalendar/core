<?php

namespace FoodCalendarBundle\Entity;

use ApiPlatform\Core\Annotation\Property;
use ApiPlatform\Core\Annotation\Resource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A person (alive, dead, undead, or fictional).
 * 
 * @see http://schema.org/Person Documentation on Schema.org
 * 
 * @ORM\Entity
 * @Resource(iri="http://schema.org/Person")
 */
class Person
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
     * @var string The name of the item.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Type(type="string")
     * @Property(iri="http://schema.org/name")
     */
    private $name;

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
     * Sets name.
     * 
     * @param string $name
     * 
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets name.
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
