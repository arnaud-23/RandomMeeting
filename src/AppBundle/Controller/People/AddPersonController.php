<?php

namespace AppBundle\Controller\People;

use AppBundle\Entity\People\Person;
use AppBundle\Form\People\Model\PersonModel;
use AppBundle\Form\People\Type\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AddPersonController extends Controller
{
    public function addAction(Request $request)
    {
        $form = $this->createForm(PersonType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var PersonModel $model */
            $model = $form->getData();

            $person = new Person();
            $person
                ->setEmail($model->email)
                ->setFirstName($model->firstName)
                ->setLastName($model->lastName);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($person);
            $entityManager->flush();

            return $this->redirectToRoute('rm_people_list');
        }

        return $this->render('AppBundle:People\Person:add.html.twig', ['form' => $form->createView()]);
    }

}
