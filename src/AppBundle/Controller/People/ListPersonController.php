<?php

namespace AppBundle\Controller\People;

use AppBundle\Entity\People\PersonImpl;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListPersonController extends Controller
{
    public function listAction()
    {
        $people = $this->getPeople();

        return $this->render('AppBundle:People/Person:list.html.twig', ['people' => $people]);
    }

    /**
     * @return \AppBundle\Entity\People\PersonImpl[]|array
     */
    private function getPeople()
    {
        $entityManager    = $this->getDoctrine()->getManager();
        $personRepository = $entityManager->getRepository(PersonImpl::class);

        return $personRepository->findAll();
    }
}
