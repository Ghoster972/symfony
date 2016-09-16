<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 15/09/2016
 * Time: 15:28
 */

namespace PetiteAnnonceBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContentController extends Controller
{

    public function listeAnnonceAction()
    {
        return $this->render('PetiteAnnonceBundle:Content:listeAnnonce.html.twig');
    }

    public function mentionLegaleAction()
    {
        return $this->render('PetiteAnnonceBundle:Content:mentionLegale.html.twig');
    }


    public function detailAnnonceAction()
    {
        return $this->render('PetiteAnnonceBundle:Content:detail.html.twig');
    }

    public function faqAction()
    {
        return $this->render('PetiteAnnonceBundle:Content:faq.html.twig');
    }


    public function cguAction()
    {
        return $this->render('PetiteAnnonceBundle:Content:cgu.html.twig');
    }
}