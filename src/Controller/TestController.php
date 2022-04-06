<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function index()
    {
        echo "<p> Ca fonctionne ! </p>";
        die();
    }

    public function test(Request $request): Response
    {
        $age = $request->query->get('age', 0);

        return new Response("Vous avez $age ans !");
    }
}
