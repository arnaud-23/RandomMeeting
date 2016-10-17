<?php

namespace AppBundle\Entity\People;

/**
 * Buddy
 */
class Buddy
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Person
     */
    private $person;

    /**
     * @var Person
     */
    private $buddy;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @return Buddy
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * @return Person
     */
    public function getBuddy()
    {
        return $this->buddy;
    }

    /**
     * @return Buddy
     */
    public function setBuddy(Person $buddy)
    {
        $this->buddy = $buddy;

        return $this;
    }
}

