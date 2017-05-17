<?php

namespace Controller;

use Helper\Controller;
use Model\ActusModel;

class CommandeController extends Controller
{
    public function afficheCommande()
    {
        $model = new ActusModel();
        $data = $model->select();
        // méthode pour sélect les actus
        return self::$twig->render('front/actus.html.twig',[
            'lastActues' => $data
        ]);
    }
}