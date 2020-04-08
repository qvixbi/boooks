<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoryContrController extends AbstractController
{
    /**
     * @Route("/category/contr", name="category_contr")
     */
    public function index()
    {
        return $this->render('category_contr/index.html.twig', [
            'controller_name' => 'CategoryContrController',
        ]);
    }
}
