<?php

namespace BusinessRules\Requestors\People;

use OpenClassrooms\UseCase\BusinessRules\Requestors\UseCaseRequest;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
interface CreatePersonRequest extends UseCaseRequest
{
    public function getEmail(): string;

    /**
     * @return null|string
     */
    public function getFirstName();

    /**
     * @return null|string
     */
    public function getLastName();
}
