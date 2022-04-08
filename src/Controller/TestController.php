<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        echo "<p> Ca fonctionne ! </p>";
        die();
    }


    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, shemes={"http", "https"})
     * 
     */

    public function test($age): Response
    {
        return new Response("Vous avez $age ans !");
    }
}
