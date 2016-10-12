<?php

namespace AppBundle\Form\People\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class PersonModel
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    public $email;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    public $firstName;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    public $lastName;
}
