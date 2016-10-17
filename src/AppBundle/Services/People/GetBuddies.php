<?php

namespace AppBundle\Services\People;

use AppBundle\Entity\People\Person;
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
     * @param Person $person
     * @param int    $number
     *
     * @return Person[]
     */
    public function getRandom(Person $person, $number = 1)
    {
        return $this->personRepository->findRandomPerson($person, $number);
    }

    public function setPersonRepository(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }
}
