<?php

namespace Controller;

use Helper\Controller;
use Model\RevuesModel;

class CommandeController extends Controller
{
    public function afficheCommande()
    {

        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            $step = $_GET['step'];

            $model = new RevuesModel();
            $data = $model->select($id);


            switch ($step) {
                case 1:

                    return self::$twig->render('front/commander.html.twig',[
                        'info' => $data
                    ]);
                    break;
                case 2 :

                    return self::$twig->render('front/commander2.html.twig', [
                        'info' => $data
                    ]);
                    break;
                case 3:

                    return self::$twig->render('front/commander3.html.twig', [
                        'info' => $data
                    ]);
                    break;
            }
        }
    }

    public function confirmCommande(){

        return self::$twig->render('front/commandeconfirmation.html.twig');
    }
}