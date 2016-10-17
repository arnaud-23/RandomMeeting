<?php

namespace AppBundle\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @author Arnaud Lefevre <arnaud.h.lefevre@gmail.com>
 */
class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Site:home.html.twig');
    }
}
