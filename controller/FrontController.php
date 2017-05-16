<?php

namespace Controller;
use \Helper\Connect;

class FrontController
{
    public function __construct()
    {
        // commence par se connection à la DBB
        Connect::getPDO();

        // GESTION DES CAS DE REDIRECTION = LES ACTIONS (récupéré dans url avec GET)
        $a = $_GET['a'] ?? $_POST['a'] ?? '' ;

        switch($a){


            default :
                $controller = new RevuesController();
                echo $controller->listAction(); // affiche la liste des numéros des revues
                break;
        }
    }
}
