<?php

namespace AppBundle\Repository\Teams;

use AppBundle\Entity\Teams\Team;
use Doctrine\ORM\EntityRepository;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class TeamRepository extends EntityRepository
{
    public function insert(Team $team)
    {
        $this->getEntityManager()->persist($team);
        $this->getEntityManager()->flush();
    }
}
