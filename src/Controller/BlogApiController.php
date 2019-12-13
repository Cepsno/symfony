<?php
// src/Controller/BlogApiController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogApiController extends AbstractController
{
    /**
     * @Route("/api/posts/{id}", methods={"GET","HEAD"})
     */
    public function show(int $id)
    {
        return new Response("Mostrando el post $id y titulo $titulo");
    }

    /**
     * @Route("/api/posts/{id}", methods={"PUT"})
     */
    public function edit(int $id)
    {
        return new Response ("Editanto el post $id");
    }
}