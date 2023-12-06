<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MockedController {

    #[Route('/fake1')]
    public function index(Request $request): Response
    {
        return new Response($request->getQueryString());
    }
}

