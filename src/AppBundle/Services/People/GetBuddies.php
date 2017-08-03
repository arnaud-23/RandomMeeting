<?php

namespace AppBundle\Services\People;

use AppBundle\Entity\People\PersonImpl;
use AppBundle\Repository\People\PersonRepository;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class GetBuddies
{
    /**
     * @var PersonRepository
     */
    private $personRepository;

    /**
     * @param PersonImpl $person
     * @param int        $number
     *
     * @return PersonImpl[]
     */
    public function getRandom(PersonImpl $person, $number = 1)
    {
        return $this->personRepository->findRandomWithPerson($person, $number);
    }

    public function setPersonRepository(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }
}
