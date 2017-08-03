<?php

namespace BusinessRules\Gateways\People;

use BusinessRules\Entities\People\Person;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
interface PersonGateway
{
    public function insert(Person $person);
}
