<?php

namespace AppBundle\Services\Team;

use AppBundle\Entity\People\Person;
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
     * @return Person[]
     */
    public function buildByMemberCount($count)
    {
        return $this->personRepository->findRandom($count);
    }

//    /**
//     * @param int $count
//     *
//     * @return Person[]
//     */
//    public function buildByTeamCount($count)
//    {
//        return [];
//    }

    public function setPersonRepository(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }
}
