<?php

namespace AppBundle\Controller\People;

use AppBundle\Form\People\Model\PersonModel;
use AppBundle\Form\People\Type\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreatePersonController extends Controller
{
    public function createAction(Request $request)
    {
        $form = $this->createForm(PersonType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var PersonModel $model */
            $model = $form->getData();
            $this->createPerson($model);

            return $this->redirectToRoute('rm_people_list');
        }

        return $this->render('AppBundle:People\Person:create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @param $model
     */
    private function createPerson($model)
    {
        $this->get('app.use_cases.people.create_person')->execute(
            $this->get('app.requestors.people.create_person_request_builder')
                ->create($model->email)
                ->withLastName($model->lastName)
                ->withFirstName($model->firstName)
                ->build()
        );
    }

}
