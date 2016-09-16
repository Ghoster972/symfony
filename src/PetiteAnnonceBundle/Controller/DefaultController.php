<?php

namespace PetiteAnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PetiteAnnonceBundle:Default:index.html.twig');
    }
}
