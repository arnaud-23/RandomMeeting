<?php

namespace AppBundle\Controller\People;

use AppBundle\Entity\People\PersonImpl;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchBuddiesController extends Controller
{
    /**
     * @param PersonImpl $person
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchAction(PersonImpl $person)
    {
        $buddies = $this->get('app.services.people.get_buddies')->getRandom($person, 3);

        return $this->render(
            'AppBundle:People/Person:search.html.twig',
            [
                'person'  => $person,
                'buddies' => $buddies
            ]
        );
    }
}
