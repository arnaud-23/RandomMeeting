<?php

namespace AppBundle\Controller\People;

use AppBundle\Entity\People\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchBuddiesController extends Controller
{
    /**
     * @param Person $person
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchAction(Person $person)
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
