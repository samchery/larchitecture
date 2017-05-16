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
        return self::$twig->render('revues/list.html.twig',[
            'list' => $data
        ]);
    }


    /**
     * methode qui va gérer : ajout dans la BDD ou affichage formulaire
     */
    public function addAction()
    {
        if(count($_POST) > 0){
            // envoie résultat dans BDD et redirection vers page
            $model = new RevuesModel();
            $data = $model->add($_POST); // dans data on a id inséré
            $detail = $model->select($data);
            return self::$twig->render('revues/details.html.twig',[
               'list' => $detail
            ]);
        } else {
            // afficher le formulaire (si y'a rien dans POST)
            return self::$twig->render('revues/form.html.twig');
        }
    }

    public function deleteAction($id)
    {
        $id = (int) $id;
        $model = new RevuesModel();
        $model->delete($id);
        header('location : index.php?a=list');
    }

    public function updateAction($id)
    {
        $id = (int) $id;
        if(count($_POST) == 0){
            $model = new RevuesModel();
            $detail = $model->select($id);
            return self::$twig->render('revues/form2.html.twig',[
                'list' => $detail
            ]);
        } else {
            $model = new RevuesModel();
            $model->update($_POST, $id);
            header ("location: index.php");
        }
    }
}

