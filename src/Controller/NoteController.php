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
    public function displayNotes()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }

    /**
     * @Route("/notes/{id}", name="note")
     */
    public function displayNote()
    {
        return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
    }
}