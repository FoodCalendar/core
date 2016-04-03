<?php

namespace FoodCalendarBundle\Entity;

use ApiPlatform\Core\Annotation\Resource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The most generic type of item.
 * 
 * @see http://schema.org/Thing Documentation on Schema.org
 * 
 * @ORM\Entity
 * @Resource(iri="http://schema.org/Thing")
 */
class Menu
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
     * @var Person
     * 
     * @ORM\OneToOne(targetEntity="FoodCalendarBundle\Entity\Person")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $madeBy;
    /**
     * @var Recipe
     * 
     * @ORM\OneToOne(targetEntity="FoodCalendarBundle\Entity\Recipe")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $containsRecipe;
    /**
     * @var Event
     * 
     * @ORM\OneToOne(targetEntity="FoodCalendarBundle\Entity\Event")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $IsPartOf;

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
     * Sets madeBy.
     * 
     * @param Person $madeBy
     * 
     * @return $this
     */
    public function setMadeBy(Person $madeBy)
    {
        $this->madeBy = $madeBy;

        return $this;
    }

    /**
     * Gets madeBy.
     * 
     * @return Person
     */
    public function getMadeBy()
    {
        return $this->madeBy;
    }

    /**
     * Sets containsRecipe.
     * 
     * @param Recipe $containsRecipe
     * 
     * @return $this
     */
    public function setContainsRecipe(Recipe $containsRecipe)
    {
        $this->containsRecipe = $containsRecipe;

        return $this;
    }

    /**
     * Gets containsRecipe.
     * 
     * @return Recipe
     */
    public function getContainsRecipe()
    {
        return $this->containsRecipe;
    }

    /**
     * Sets IsPartOf.
     * 
     * @param Event $IsPartOf
     * 
     * @return $this
     */
    public function setIsPartOf(Event $IsPartOf)
    {
        $this->IsPartOf = $IsPartOf;

        return $this;
    }

    /**
     * Gets IsPartOf.
     * 
     * @return Event
     */
    public function getIsPartOf()
    {
        return $this->IsPartOf;
    }
}
