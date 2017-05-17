<?php


namespace Controller;

use Helper\Controller;
use Model\PartenairesModel;

class PartenairesController extends Controller
{
    public function affichePartenaires()
    {
        $model = new PartenairesModel();
        $data = $model->select();
        // méthode pour sélect les actus
        return self::$twig->render('admin/partenaires.html.twig',[
            'partenaires' => $data
        ]);
    }

    /**
     * La méthode va suivant les cas :
     * - ajouter les informations récupérées en POST dans la BDD et rediriger vers le détail de la nouvelle entrée
     * - rediriger vers le template qui affiche le formulaire d'ajout
     */
    public function addPartenaire()
    {
        if(count($_POST) > 0){
            // envoie résultat dans BDD et redirection vers page
            $model = new PartenairesModel();
            $data = $model->add($_POST); // dans data on a id inséré
            $model->select($data);
            header("location: /admin/partenaires");
        } else {
            // afficher le formulaire (si y'a rien dans POST)
            return self::$twig->render('admin/formpartenaires.html.twig');
        }
    }

    /**
     * Supprime l'entrée dont l'id est passé en paramètre
     * et redirige vers la liste des revues
     */
    public function deletePartenaire()
    {
        $id = $_GET['id'];
        // on s'assure que l'id est bien un entier
        $id = (int) $id;

        $model = new PartenairesModel();
        $model->delete($id);
        Header("Location: /admin/partenaires");
    }

    /**
     * @return string
     * @internal param $id
     * La méthode va suivant les cas :
     * - rediriger vers le formulaire de modification prérempli suivant l'id passé en paramètre
     * - updater la bdd et rediriger vers la liste des revues
     */
    public function updatePartenaire()
    {
        $id = $_GET['id'];
        // on s'assure que l'id est bien un entier
        $id = (int) $id;

        if(count($_POST) == 0){
            $model = new PartenairesModel();
            $detail = $model->select($id);
            return self::$twig->render('admin/formpartenaires.html.twig',[
                'list' => $detail
            ]);
        } else {
            $model = new PartenairesModel();
            $model->update($_POST, $id);
            Header("Location: partenaires");
        }
    }
}