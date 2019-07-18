<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionUserController extends AbstractController
{
    /**
     * @Route("/gestion/login", name="gestion_login")
     */
    public function connexion()
    {
        // réccupérer les données
        // traiter les données -> variable
        // retourne les données de la varible
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/GestionUserController.php',
        ]);
    }
}
