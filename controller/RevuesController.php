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
     * On récupère la liste des données et on les envoie dans le template
     */
    public function listAction()
    {
        $model = new RevuesModel();
        $data = $model->select() ;
        return self::$twig->render('admin/list.html.twig',[
            'list' => $data
        ]);
    }

    public function regionAction($region)
    {
        $model = new RevuesModel();
        $data = $model->selectByRegion($region) ;
        return self::$twig->render('revues/region.html.twig',[
            'list' => $data
        ]);
    }


    /**
     * La méthode va suivant les cas :
     * - ajouter les informations récupérées en POST dans la BDD et rediriger vers le détail de la nouvelle entrée
     * - rediriger vers le template qui affiche le formulaire d'ajout
     */
    public function addAction()
    {
        if(count($_POST) > 0){
            // envoie résultat dans BDD et redirection vers page
            $model = new RevuesModel();
            $data = $model->add($_POST); // dans data on a id inséré
            $model->select($data);
            header("location: /admin");
        } else {
            // afficher le formulaire (si y'a rien dans POST)
            return self::$twig->render('admin/form.html.twig');
        }
    }

    /**
     * @param $id
     * Supprime l'entrée dont l'id est passé en paramètre
     * et redirige vers la liste des revues
     */
    public function deleteAction()
    {
        $id = $_GET['id'];
        // on s'assure que l'id est bien un entier
        $id = (int) $id;

        $model = new RevuesModel();
        $model->delete($id);
        Header("Location: /admin");
    }

    /**
     * @return string
     * @internal param $id
     * La méthode va suivant les cas :
     * - rediriger vers le formulaire de modification prérempli suivant l'id passé en paramètre
     * - updater la bdd et rediriger vers la liste des revues
     */
    public function updateAction()
    {
        $id = $_GET['id'];
        // on s'assure que l'id est bien un entier
        $id = (int) $id;

        if(count($_POST) == 0){
            $model = new RevuesModel();
            $detail = $model->select($id);
            return self::$twig->render('admin/form.html.twig',[
                'list' => $detail
            ]);
        } else {
            $model = new RevuesModel();
            $model->update($_POST, $id);
            return self::$twig->render('admin/list.html.twig');
        }
    }
}

