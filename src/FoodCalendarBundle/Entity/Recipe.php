<?php

namespace FoodCalendarBundle\Entity;

use ApiPlatform\Core\Annotation\Property;
use ApiPlatform\Core\Annotation\Resource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A recipe.
 * 
 * @see http://schema.org/Recipe Documentation on Schema.org
 * 
 * @ORM\Entity
 * @Resource(iri="http://schema.org/Recipe")
 */
class Recipe
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
     * @var string A short description of the item.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Type(type="string")
     * @Property(iri="http://schema.org/description")
     */
    private $description;
    /**
     * @var Ingredients A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     * 
     * @ORM\ManyToOne(targetEntity="FoodCalendarBundle\Entity\Ingredients")
     * @Property(iri="http://schema.org/ingredients")
     */
    private $ingredients;
    /**
     * @var string The name of the item.
     * 
     * @ORM\Column(nullable=true)
     * @Assert\Type(type="string")
     * @Property(iri="http://schema.org/name")
     */
    private $name;
    /**
     * @var Menu
     * 
     * @ORM\OneToOne(targetEntity="FoodCalendarBundle\Entity\Menu")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $IsPartOf;
    /**
     * @var Person
     * 
     * @ORM\OneToOne(targetEntity="FoodCalendarBundle\Entity\Person")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $madeBy;

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
     * Sets description.
     * 
     * @param string $description
     * 
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets description.
     * 
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets ingredients.
     * 
     * @param Ingredients $ingredients
     * 
     * @return $this
     */
    public function setIngredients(Ingredients $ingredients = null)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Gets ingredients.
     * 
     * @return Ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
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

    /**
     * Sets IsPartOf.
     * 
     * @param Menu $IsPartOf
     * 
     * @return $this
     */
    public function setIsPartOf(Menu $IsPartOf)
    {
        $this->IsPartOf = $IsPartOf;

        return $this;
    }

    /**
     * Gets IsPartOf.
     * 
     * @return Menu
     */
    public function getIsPartOf()
    {
        return $this->IsPartOf;
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
}
