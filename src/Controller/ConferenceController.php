<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/conference", name="homepage")
     */
    public function index(): Response
    {
        return new Response(
            <<<EOF
<html>
    <body>
        <img src="../images/under_construction.gif" />
    </body>
</html>
EOF
        );
    }
}
