<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     *
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        return $this->render('security/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError()
        ]);
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