<?php

namespace Controller;

use Helper\Controller;
use Model\ActusModel;

class ActusController extends Controller
{
    public function afficheActus()
    {
        $id = (int) $_GET['id'] ?? $id = NULL ;
        if($id){
            $model = new ActusModel();
            $data = $model->select($id);
        } else{
            $model = new ActusModel();
            $data = $model->select();
        }
        // méthode pour sélect les actus
        return self::$twig->render('front/actus.html.twig',[
            'lastActues' => $data
        ]);
    }
}
