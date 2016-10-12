<?php

namespace AppBundle\Controller\People;

use AppBundle\Entity\People\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListPersonController extends Controller
{
    public function listAction()
    {
        $people = $this->getPeople();

        return $this->render('AppBundle:People/Person:list.html.twig', ['people' => $people]);
    }

    /**
     * @return \AppBundle\Entity\People\Person[]|array
     */
    private function getPeople()
    {
        $entityManager    = $this->getDoctrine()->getManager();
        $personRepository = $entityManager->getRepository(Person::class);

        return $personRepository->findAll();
    }
}
