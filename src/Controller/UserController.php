<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/registration")
     */
    public function registration()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }

    /**
     * @Route("/profile")
     */
    public function profile()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }
}
