<?php

namespace FoodCalendarBundle\Entity;

use ApiPlatform\Core\Annotation\Property;
use ApiPlatform\Core\Annotation\Resource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the 'offers' property. Repeated events may be structured as separate Event objects.
 * 
 * @see http://schema.org/Event Documentation on Schema.org
 * 
 * @ORM\Entity
 * @Resource(iri="http://schema.org/Event")
 */
class Event
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
     * @var Person An organizer of an Event.
     * 
     * @ORM\ManyToOne(targetEntity="FoodCalendarBundle\Entity\Person")
     * @Property(iri="http://schema.org/organizer")
     */
    private $organizer;
    /**
     * @var Menu
     * 
     * @ORM\OneToOne(targetEntity="FoodCalendarBundle\Entity\Menu")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $containsMenu;

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
     * Sets organizer.
     * 
     * @param Person $organizer
     * 
     * @return $this
     */
    public function setOrganizer(Person $organizer = null)
    {
        $this->organizer = $organizer;

        return $this;
    }

    /**
     * Gets organizer.
     * 
     * @return Person
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * Sets containsMenu.
     * 
     * @param Menu $containsMenu
     * 
     * @return $this
     */
    public function setContainsMenu(Menu $containsMenu)
    {
        $this->containsMenu = $containsMenu;

        return $this;
    }

    /**
     * Gets containsMenu.
     * 
     * @return Menu
     */
    public function getContainsMenu()
    {
        return $this->containsMenu;
    }
}
