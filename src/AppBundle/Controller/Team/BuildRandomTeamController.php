<?php

namespace AppBundle\Controller\Team;

use AppBundle\Form\Team\Model\TeamModel;
use AppBundle\Form\Team\Type\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class BuildRandomTeamController extends Controller
{
    public function buildAction(Request $request)
    {
        $form = $this->createForm(TeamType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var TeamModel $model */
            $model = $form->getData();

            $buddies = $this->get('app.services.team.build_random_team')
                ->buildByMemberCount($model->memberCount);

            return $this->render('AppBundle:Team:team.html.twig', ['buddies' => $buddies]);
        }

        return $this->render('AppBundle:Team:build.html.twig', ['form' => $form->createView()]);
    }
}
