<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionUserController extends AbstractController
{
    /**
     * @Route("/gestion/login", name="gestion_login")
     */
    public function connexion(Request $request)
    {
        // céer un objet réponse de type json
        $response = new JsonResponse();

        // Vérifier si la requête est conforme (type ajax)
        if ($request->isXmlHttpRequest()) {
            // réccupérer les données et traiter les données -> variable $content
            $content = $request->getContent();
            // traiter les données -> variable $response
            $response->setContent($content);
        }

        // retourner les données de la variable $response
        return $response;
    }
}
