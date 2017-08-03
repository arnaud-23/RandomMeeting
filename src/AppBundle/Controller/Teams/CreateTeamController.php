<?php

namespace AppBundle\Controller\Teams;

use AppBundle\Entity\Teams\Team;
use AppBundle\Form\Teams\Model\TeamModel;
use AppBundle\Form\Teams\Type\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class CreateTeamController extends Controller
{
    public function createAction(Request $request)
    {
        $form = $this->createForm(TeamType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var TeamModel $model */
            $model = $form->getData();
            $team  = new Team($model->name);
            $team->setPosition($model->position);

            $entityManager  = $this->getDoctrine()->getManager();
            $teamRepository = $entityManager->getRepository(Team::class);
            $teamRepository->insert($team);

            return $this->redirectToRoute('rm_team_list');
        }


        return $this->render('AppBundle:Teams:add.html.twig', ['form' => $form->createView()]);
    }
}
