<?php

namespace AppBundle\Services\Team;

use AppBundle\Entity\People\PersonImpl;
use AppBundle\Repository\People\PersonRepository;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class buildRandomTeam
{
    /**
     * @var PersonRepository
     */
    private $personRepository;

    /**
     * @param int $count
     *
     * @return PersonImpl[]
     */
    public function buildByMemberCount($count = 1)
    {
        return $this->personRepository->findRandom($count);
    }

    /**
     * @param int $count
     *
     * @return PersonImpl[]
     */
    public function buildByTeamCount($count = 1)
    {
        return [];
    }

    public function setPersonRepository(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }
}
