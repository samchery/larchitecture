<?php

namespace Controller;

use Helper\Controller;
use Model\RevuesModel;
use Model\ActusModel;

class PageController extends Controller
{
    public function goHome()
    {
        // récupère les 4 dernières revues
        $model = new RevuesModel();
        $data = $model->getLast(4);

        // sélectionne les 3 dernières actus
        $modelActu = new ActusModel();
        $dataActu = $modelActu->getLast(3);

        return self::$twig->render('front/home.html.twig',[
            'lastrevues' => $data,
            'lastActus' => $dataActu
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
