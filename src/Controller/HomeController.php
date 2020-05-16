<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    public function test()
    {
        return new Response(
            '<html><body>Le test</body></html>'
        );
    }
}