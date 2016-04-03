<?php

namespace FoodCalendarBundle\Entity;

use ApiPlatform\Core\Annotation\Property;
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
class Ingredients
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
     * @Assert\Type(type="string")
     * @Property(iri="http://schema.org/name")
     */
    private $name;
    /**
     * @var int
     * 
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Type(type="integer")
     * @Assert\NotNull
     */
    private $price;
    /**
     * @var int
     * 
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Type(type="integer")
     * @Assert\NotNull
     */
    private $cal;
    /**
     * @var string
     * 
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull
     */
    private $country;
    /**
     * @var bool
     * 
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Type(type="boolean")
     * @Assert\NotNull
     */
    private $biological;
    /**
     * @var Menu
     * 
     * @ORM\OneToOne(targetEntity="FoodCalendarBundle\Entity\Menu")
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
     * Sets price.
     * 
     * @param int $price
     * 
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets price.
     * 
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets cal.
     * 
     * @param int $cal
     * 
     * @return $this
     */
    public function setCal($cal)
    {
        $this->cal = $cal;

        return $this;
    }

    /**
     * Gets cal.
     * 
     * @return int
     */
    public function getCal()
    {
        return $this->cal;
    }

    /**
     * Sets country.
     * 
     * @param string $country
     * 
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets country.
     * 
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets biological.
     * 
     * @param bool $biological
     * 
     * @return $this
     */
    public function setBiological($biological)
    {
        $this->biological = $biological;

        return $this;
    }

    /**
     * Gets biological.
     * 
     * @return bool
     */
    public function getBiological()
    {
        return $this->biological;
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
}
