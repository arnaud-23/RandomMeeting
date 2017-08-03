<?php

namespace BusinessRules\Requestors\People;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
interface CreatePersonRequestBuilder
{
    public function create(string $email): CreatePersonRequestBuilder;

    public function withFirstName(string $firstName = null): CreatePersonRequestBuilder;

    public function withLastName(string $lastName = null): CreatePersonRequestBuilder;

    public function build(): CreatePersonRequest;
}
