<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NoteController extends Controller
{
    /**
     * @Route("/notes")
     *
     * @return Response
     */
    public function notes()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }

    /**
     * @Route("/notes/{id}", name="note")
     */
    public function note()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }
}