<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Route("/login")
     *
     * @return Response
     */
    public function index()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }

    /**
     * @Route("/password/change", name="password.change")
     */
    public function changePassword()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }

    /**
     * @Route("/password/restore", name="password.restore")
     */
    public function restorePassword()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }
}