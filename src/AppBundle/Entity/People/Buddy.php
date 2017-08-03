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
     * @var PersonImpl
     */
    private $person;

    /**
     * @var PersonImpl
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
     * @return PersonImpl
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @return Buddy
     */
    public function setPerson(PersonImpl $person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * @return PersonImpl
     */
    public function getBuddy()
    {
        return $this->buddy;
    }

    /**
     * @return Buddy
     */
    public function setBuddy(PersonImpl $buddy)
    {
        $this->buddy = $buddy;

        return $this;
    }
}

