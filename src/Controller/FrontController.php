<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends AbstractController{
    /**
     * @Route ("/")
     */
    public function index(){
        return new Response("coucou");
    }
}
