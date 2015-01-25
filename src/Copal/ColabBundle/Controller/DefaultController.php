<?php

namespace Copal\ColabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CopalColabBundle:Default:index.html.twig', array('name' => $name));
    }
}
