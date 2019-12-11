<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NoticiasController extends AbstractController {
    
    /**
     * @Route("/noticias/", name="show_all")
     */
    public function show_all()
    {
        return $this->render("noticias/show_all.html.twig");
    }

    /**
     * @Route("/noticias/{id}", name="show", requirements={"id"="([0-9])+"})
     */
    public function show(int $id){
        
        return $this->render("noticias/show.html.twig");
    }

    /**
     * @Route("/noticias/delete/{id}", name="delete")
     */
    public function delete(int $id){
        
    }
 
    /**
     * @Route("/noticias/edit/{id}", name="edit")
     */
    public function edit(int $id){
        
        return $this->render("noticias/edit.html.twig");
    }
    
    /**
     * @Route("/noticias/insert", name="insert")
     */
    public function insert(){
        
        return $this->render("noticias/insert.html.twig");
    }
}
