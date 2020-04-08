<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookContrController extends AbstractController
{
    /**
     * @Route("/book/contr", name="book_contr")
     */
    public function index()
    {
        return $this->render('book_contr/index.html.twig', [
            'controller_name' => 'BookContrController',
        ]);
    }
}
