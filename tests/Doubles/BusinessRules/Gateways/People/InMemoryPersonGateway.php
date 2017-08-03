<?php

namespace Doubles\BusinessRules\Gateways\People;

use BusinessRules\Entities\People\Person;
use BusinessRules\Gateways\People\PersonGateway;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class InMemoryPersonGateway implements PersonGateway
{
    /**
     * @var Person[]
     */
    public static $people = [];

    /**
     * @var int
     */
    public static $id = 0;

    /**
     * @param Person[] $people
     */
    public function __construct(array $people = [])
    {
        self::$id     = 0;
        self::$people = $people;
    }


    /**
     * {@inheritdoc}
     */
    public function insert(Person $person)
    {
        self::setId($person, self::$id);
        self::$people[self::$id] = $person;

        return $this;
    }


    public static function setId($object, $id)
    {
        $property = new \ReflectionProperty(get_class($object), 'id');
        $property->setAccessible(true);
        $property->setValue($object, $id);
    }
}
