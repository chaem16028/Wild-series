<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;





class WildController extends AbstractController
{

    /**
     * @Route("/wild/show/{slug}", name="wild_show", requirements={"slug"="[a-z0-9-]+"})
     */
    public function show($slug = "Aucune série sélectionnée, veuillez choisir une série"):Response
    {
        $slug = str_replace("-"," ",$slug);
        $slug = ucwords($slug);
        return $this->render("wild/show.html.twig", ['slug' => $slug ]);
    }
}