<?php

namespace AppBundle\Form\Team\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class TeamModel
{
    /**
     * @var int
     *
     * @Assert\NotBlank()
     * @Assert\GreaterThan(0)
     */
    public $memberCount;
}
