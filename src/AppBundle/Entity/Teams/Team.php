<?php

namespace AppBundle\Entity\Teams;

use AppBundle\Entity\People\PersonImpl;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class Team
{
    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var PersonImpl[]
     */
    private $people;

    /**
     * @var int
     */
    private $position;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name      = $name;
        $this->createdAt = new \DateTime();
    }


    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return PersonImpl[]
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * @param PersonImpl[] $people
     */
    public function setPeople(array $people)
    {
        $this->people = $people;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}
