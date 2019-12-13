<?php

namespace App\Controller;

use App\Entity\Noticia;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NoticiasController extends AbstractController
{

    /**
     * @Route("/noticias/", name="show_all")
     */
    public function show_all()
    {
        $noticia = array('titulo' => 'Titulo de la noticia',
            'texto' => 'Ejemplo de texto',
            'usuario' => 'Anonimo',
            'id' => '4');
        return $this->render("noticias/show_all.html.twig", [
            'noticia' => $noticia,
        ]);
    }

    /**
     * @Route("/noticias/{id}", name="show", requirements={"id"="([0-9])+"})
     */
    public function show(int $id)
    {

        return $this->render("noticias/show.html.twig");
    }

    /**
     * @Route("/noticias/delete/{id}", name="delete")
     */
    public function delete(int $id)
    {

    }

    /**
     * @Route("/noticias/edit/{id}", name="edit")
     */
    public function edit(int $id)
    {

        return $this->render("noticias/edit.html.twig");
    }

    /**
     * @Route("/noticias/insert", name="insert")
     */
    public function insert()
    {
        $entity = $this->getDoctrine()->getManager();

        $noticia = new Noticia();
        $noticia->setTitulo("Titulo prueba");
        $noticia->setTexto("Texto prueba");

        $entity->persist($noticia);

        $entity->flush();

        return $this->render("noticias/insert.html.twig");
    }
}
