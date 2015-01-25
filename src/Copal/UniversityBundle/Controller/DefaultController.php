<?php

namespace Copal\UniversityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CopalUniversityBundle:Default:index.html.twig', array('name' => $name));
    }
}
