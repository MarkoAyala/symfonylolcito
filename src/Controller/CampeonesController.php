<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CampeonesController extends AbstractController
{
    /*
     * @Route("/",name="homepage")
     */
    public function indexAction(Request $request) {
        return $this->render('base.html.twig');
    }
    /*
     * @Route("/champs",name="homepage_champs")
    */
    public function show(Request $request) {
        return $this->render('campeones/index.html.twig');
    }
}
