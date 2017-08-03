<?php

namespace AppBundle\Entity\People;

use BusinessRules\Entities\People\Person;
use BusinessRules\Entities\People\PersonFactory;
use BusinessRules\Requestors\People\CreatePersonRequest;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class PersonFactoryImpl implements PersonFactory
{

    public function create(CreatePersonRequest $request): Person
    {
        $person = new PersonImpl($request->getEmail());
        $person->setFirstName($request->getFirstName());
        $person->setLastName($request->getLastName());

        return $person;
    }
}
