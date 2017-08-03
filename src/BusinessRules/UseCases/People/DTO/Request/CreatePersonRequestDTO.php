<?php

namespace BusinessRules\UseCases\People\DTO\Request;

use BusinessRules\Requestors\People\CreatePersonRequest;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class CreatePersonRequestDTO implements CreatePersonRequest
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string|null
     */
    public $firstName;

    /**
     * @var string|null
     */
    public $lastName;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}
