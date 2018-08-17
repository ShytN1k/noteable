<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function index()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }
}