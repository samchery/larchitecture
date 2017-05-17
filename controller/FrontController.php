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
        Connect::getPDO();

        // ordre de priorité des valeurs que prendra $a
        $a = $_GET['a'] ?? $_POST['a'] ?? '' ;

        // différents cas de paramètres passés dans l'url
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
            case 'zone' :
                $controller = new RevuesController();
                echo $controller->regionAction($_GET['region']);
                break;
            default :
                $controller = new RevuesController();
                echo $controller->listAction();
                break;
        }
    }
}
