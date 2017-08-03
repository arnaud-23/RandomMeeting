<?php

namespace AppBundle\Form\Teams\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class TeamModel
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     */
    public $name;

    /**
     * @var int
     */
    public $position;
}
