<?php

namespace BusinessRules\Entities\People;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
abstract class Person
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $lastName;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName = null)
    {
        $this->firstName = $firstName;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName = null)
    {
        $this->lastName = $lastName;
    }
}
