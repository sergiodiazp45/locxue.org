<?php

namespace locxue\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('locxuePageBundle:Default:index.html.twig');
    }
}
