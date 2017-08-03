<?php

namespace AppBundle\Controller\Teams;

use AppBundle\Entity\Teams\Team;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class ListTeamController extends Controller
{
    public function listAction()
    {
        $teams = $this->getTeams();

        return $this->render('AppBundle:Teams:list.html.twig', ['teams' => $teams]);
    }

    /**
     * @return Team[]
     */
    private function getTeams()
    {
        $entityManager  = $this->getDoctrine()->getManager();
        $teamRepository = $entityManager->getRepository(Team::class);

        return $teamRepository->findAll();
    }
}
