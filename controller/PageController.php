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

    public function goQui()
    {
        return self::$twig->render('front/quisommesnous.html.twig');
    }

    public function goMentions()
    {
        return self::$twig->render('front/mentions.html.twig');
    }

    public function goContact()
    {
        return self::$twig->render('front/contact.html.twig');
    }

    public function goAbonnement()
    {
        return self::$twig->render('front/abonnement.html.twig');
    }

    public function goOffre()
    {
        return self::$twig->render('front/appelOffre.html.twig');
    }
}
