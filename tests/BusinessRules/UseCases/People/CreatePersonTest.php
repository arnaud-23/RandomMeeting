<?php

namespace BusinessRules\UseCases\People;

use AppBundle\Entity\People\PersonFactoryImpl;
use BusinessRules\Requestors\People\CreatePersonRequest;
use BusinessRules\UseCases\People\DTO\Request\CreatePersonRequestBuilderImpl;
use Doubles\BusinessRules\Entities\People\PersonStub;
use Doubles\BusinessRules\Gateways\People\InMemoryPersonGateway;
use PHPUnit\Framework\TestCase;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class CreatePersonTest extends TestCase
{
    /**
     * @var CreatePersonRequest
     */
    private $request;

    /**
     * @var CreatePerson
     */
    private $useCase;

    /**
     * @test
     */
    public function createPerson()
    {
        InMemoryPersonGateway::$id = PersonStub::ID;

        $this->assertEmpty(InMemoryPersonGateway::$people);

        $this->useCase->execute($this->request);

        $this->assertCount(1, InMemoryPersonGateway::$people);
        $person = InMemoryPersonGateway::$people[PersonStub::ID];
        $this->assertSame(PersonStub::EMAIL, $person->getEmail());
        $this->assertSame(PersonStub::FIRST_NAME, $person->getFirstName());
        $this->assertSame(PersonStub::ID, $person->getId());
        $this->assertSame(PersonStub::LAST_NAME, $person->getLastName());
    }

    protected function setUp()
    {
        $this->request = $this->buildRequest();

        $this->useCase = new CreatePerson();
        $this->useCase->setPersonFactory(new PersonFactoryImpl());
        $this->useCase->setPersonGateway(new InMemoryPersonGateway());
    }

    private function buildRequest(): CreatePersonRequest
    {
        return (new CreatePersonRequestBuilderImpl())
            ->create(PersonStub::EMAIL)
            ->withFirstName(PersonStub::FIRST_NAME)
            ->withLastName(PersonStub::LAST_NAME)
            ->build();
    }
}
