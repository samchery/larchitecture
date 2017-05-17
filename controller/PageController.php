<?php

namespace Controller;

use Helper\Controller;
use Model\RevuesModel;

class PageController extends Controller
{
    public function goHome()
    {
        $model = new RevuesModel();
        $data = $model->select();
        // méthode pour sélect les actus
        return self::$twig->render('front/home.html.twig',[
            'lastrevues' => $data
        ]);
    }

    //a supprimer pour l'inté
    public function tempPartenaires()
    {
        return self::$twig->render('admin/partenaires.html.twig');
    }

    public function tempActus()
    {
        return self::$twig->render('admin/actus.html.twig');
    }


}