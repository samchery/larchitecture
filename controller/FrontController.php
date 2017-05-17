<?php

namespace Controller;
use \Helper\Connect;
use Model\RevuesModel;

/**
 * Class FrontController
 * Permet de gérer les actions en fonction des paramètres passés dans l'url
 */
class FrontController
{
    public function __construct()
    {
        // commence par se connection à la DBB
        Connect::getPDO();

        // GESTION DES CAS DE REDIRECTION = LES ACTIONS (récupéré dans url avec GET)
        $a = $_GET['a'] ?? $_POST['a'] ?? '' ;

        switch($a){
            case 'ajouter' :
                $controller = new RevuesController();
                echo $controller->addAction();
                break;
            case 'supp' :
                $controller = new RevuesController();
                echo $controller->deleteAction($_GET['id']);
                break;
            case 'modifier' :
                $controller = new RevuesController();
                echo $controller->updateAction($_GET['id']);
                break;
            default :
                $controller = new RevuesController();
                echo $controller->listAction(); // affiche la liste des numéros des revues
                break;
        }
    }
}
