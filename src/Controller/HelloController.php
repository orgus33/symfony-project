<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $calculator;


    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @Route("/hello/{name?World}", name="hello")
     */
    public function hello($name): Response
    {
        $tva = $this->calculator->calcul(100);
        return new Response("Hello $name ! Prix : $tva");
    }
}
