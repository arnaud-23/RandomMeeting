<?php

namespace Doubles\BusinessRules\Entities\People;

use AppBundle\Entity\People\PersonImpl;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class PersonStub extends PersonImpl
{
    const EMAIL      = 'person.stub@email.com';

    const FIRST_NAME = 'Person Stub FirstName';

    const ID         = 84237634;

    const LAST_NAME  = 'Person Stub LastName';

    public function __construct()
    {
        parent::__construct(self::EMAIL);
        $this->firstName = self::FIRST_NAME;
        $this->id        = self::ID;
        $this->lastName  = self::LAST_NAME;
    }
}
