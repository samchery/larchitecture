<?php

namespace Controller;

use Helper\Controller;
use Model\ActusModel;

class ActusController extends Controller
{
    public function afficheActus()
    {
        $model = new ActusModel();
        $data = $model->select();
        // méthode pour sélect les actus
        return self::$twig->render('admin/actus.html.twig',[
            'lastActues' => $data
        ]);
    }

    public function afficheUneActu()
    {
        if($_GET['id']){
            $id = (int) $_GET['id'];
            $model = new ActusModel();
            $data = $model->select($id);
            // méthode pour sélect les actus
            return self::$twig->render('front/detailsActu.html.twig',[
                'lastActues' => $data
            ]);
        }
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
            $model = new ActusModel();
            $data = $model->add($_POST); // dans data on a id inséré
            $model->select($data);
            header("location: /admin/actus");
        } else {
            // afficher le formulaire (si y'a rien dans POST)
            return self::$twig->render('admin/formactu.html.twig');
        }
    }

    /**
     * Supprime l'entrée dont l'id est passé en paramètre
     * et redirige vers la liste des revues
     */
    public function deleteAction()
    {
        $id = $_GET['id'];
        // on s'assure que l'id est bien un entier
        $id = (int) $id;

        $model = new ActusModel();
        $model->delete($id);
        Header("Location: /admin/actus");
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
            $model = new ActusModel();
            $detail = $model->select($id);
            return self::$twig->render('admin/formactu.html.twig',[
                'list' => $detail
            ]);
        } else {
            $model = new ActusModel();
            $model->update($_POST, $id);
            Header("Location: actus");
        }
    }
}

