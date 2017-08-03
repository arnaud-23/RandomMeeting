<?php

namespace BusinessRules\Entities\People;

use BusinessRules\Requestors\People\CreatePersonRequest;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
interface PersonFactory
{
    public function create(CreatePersonRequest $request): Person;
}
