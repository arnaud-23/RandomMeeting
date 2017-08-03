<?php

namespace BusinessRules\UseCases\People\DTO\Request;

use BusinessRules\Requestors\People\CreatePersonRequest;
use BusinessRules\Requestors\People\CreatePersonRequestBuilder;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class CreatePersonRequestBuilderImpl implements CreatePersonRequestBuilder
{
    /**
     * @var CreatePersonRequestDTO
     */
    private $request;

    /**
     * {@inheritdoc}
     */
    public function create(string $email): CreatePersonRequestBuilder
    {
        $this->request = new CreatePersonRequestDTO($email);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function withFirstName(string $firstName = null): CreatePersonRequestBuilder
    {
        $this->request->firstName = $firstName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function withLastName(string $lastName = null): CreatePersonRequestBuilder
    {
        $this->request->lastName = $lastName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function build(): CreatePersonRequest
    {
        return $this->request;
    }
}
