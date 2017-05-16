<?php

namespace Controller;

use \Helper\Controller;
use \Model\RevuesModel;

/**
 * Class RevuesController
 * @package Controller
 */
class RevuesController extends Controller
{
    /**
     * methode qui va gérer : récupère les données de la requete select et les envoie dans le template twig de revue
     * @return string
     */
    public function listAction()
    {
        $model = new RevuesModel();
        $data = $model->select() ;
        return self::$twig->render('revues/test.html.twig',[
            'list' => $data
        ]);
    }

    public function ()
    {

    }


}
