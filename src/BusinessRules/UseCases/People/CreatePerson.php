<?php

namespace BusinessRules\UseCases\People;

use BusinessRules\Entities\People\PersonFactory;
use BusinessRules\Gateways\People\PersonGateway;
use BusinessRules\Requestors\People\CreatePersonRequest;
use OpenClassrooms\UseCase\Application\Annotations\Transaction;
use OpenClassrooms\UseCase\BusinessRules\Requestors\UseCase;
use OpenClassrooms\UseCase\BusinessRules\Requestors\UseCaseRequest;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class CreatePerson implements UseCase
{
    /**
     * @var PersonFactory
     */
    private $personFactory;

    /**
     * @var PersonGateway
     */
    private $personGateway;

    /**
     * @Transaction
     *
     * @param CreatePersonRequest $useCaseRequest
     */
    public function execute(UseCaseRequest $useCaseRequest)
    {
        $person = $this->personFactory->create($useCaseRequest);

        $this->personGateway->insert($person);
    }

    public function setPersonFactory(PersonFactory $personFactory)
    {
        $this->personFactory = $personFactory;
    }

    public function setPersonGateway(PersonGateway $personGateway)
    {
        $this->personGateway = $personGateway;
    }
}
