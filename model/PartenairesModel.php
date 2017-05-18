<?php

namespace Model;
use \Helper\Model;
use \PDO;

/**
 * Class RevuesModel
 * Va gérer toutes les modifications de la table revues de la bdd
 * @package Controller
 */
class PartenairesModel extends Model
{
    /**
     * @param null $id
     * @return array | bool
     * @throws \Exception
     * Suivant les cas, la méthode va :
     * - sélectionner toutes les entrées de la table revues
     * - sélectionner une entrée correspondant à l'id passée en paramètre
     */
    public function select($id = Null){
        if($id === Null){
            $sql = 'SELECT 
                      id, 
                      nom, 
                      departement, 
                      url, 
                      region, 
                      secteur,
                      logo
                    FROM partenaires';
            $requete = self::$db->query($sql);

            return $requete->fetchAll(PDO::FETCH_OBJ);
        } elseif (is_int($id)){
            $sql = 'SELECT 
                      id, 
                      nom, 
                      departement, 
                      url, 
                      region, 
                      secteur,
                      logo
                FROM partenaires
                WHERE id = :id';
            $requete = self::$db->prepare($sql);
            $requete->bindValue(':id', $id, PDO::PARAM_INT);
            $requete->execute();

            if ($requete->errorCode() !== "00000") {
               throw new \Exception('Argh database');
            }

            return $requete->fetch(PDO::FETCH_OBJ);
        }
    }

    public function selectbyRegion($region){
            $sql = 'SELECT 
                      id,
                      nom, 
                      departement, 
                      url, 
                      region, 
                      secteur,
                      logo
                    FROM partenaires
                    WHERE region = :region';

            $requete = self::$db->prepare($sql);
            $requete->bindValue(':region', $region, PDO::PARAM_INT);
            $requete->execute();

            return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * @param $statement
     * @return string : id de l'entrée que l'on vient d'ajouter
     * @throws \Exception
     * La méthode récupère les valeurs contenues dans $statement
     * et les injecte dans la bdd
     */
    public function add($statement){
        if(is_array($statement)){
            $sql = 'INSERT INTO partenaires(
                      id, 
                      nom, 
                      departement, 
                      url, 
                      region, 
                      secteur,
                      logo)                 
                    VALUES(
                      NULL, 
                      :nom, 
                      :departement, 
                      :url, 
                      :region, 
                      :secteur,
                      :logo)';
            $requete = self::$db->prepare($sql);
            $requete->bindValue(':nom', $statement['nom'], PDO::PARAM_INT);
            $requete->bindValue(':departement', $statement['departement'], PDO::PARAM_STR);
            $requete->bindValue(':url', $statement['url'], PDO::PARAM_STR);
            $requete->bindValue(':region', $statement['region'], PDO::PARAM_STR);
            $requete->bindValue(':secteur', $statement['secteur'], PDO::PARAM_STR);
            $requete->bindValue(':logo', $statement['logo'], PDO::PARAM_STR);
            $requete->execute();

            if ($requete->errorCode() !== "00000") {
                throw new \Exception('Argh database');
            }

            return (int) self::$db->lastInsertId();
        }
    }

    /**
     * @param $id
     * @return null
     * @throws \Exception
     * La méthode supprime de la bdd l'entrée qui correspond à l'id contenu dans $id
     */
    public function delete($id){
        if(is_int($id)){
            $sql = 'DELETE FROM partenaires WHERE id = :id';
            $requete = self::$db->prepare($sql);
            $requete->bindValue(':id', $id, PDO::PARAM_INT);
            $requete->execute();

            if ($requete->errorCode() !== "00000") {
                throw new \Exception('Arg database');
            }
        }
    }

    /**
     * @param $statement
     * @param $id
     * @throws \Exception
     * Méthode qui met à jour une entrée de la bdd avec les valeurs de $statement
     * à l'id contenu dans $id
     */
    public function update($statement, $id){
        if(is_array($statement) && is_int($id)){
            $sql = 'UPDATE partenaires 
                    SET 
                      nom = :nom, 
                      departement = :departement, 
                      url = :url, 
                      region = :region, 
                      secteur = :secteur,
                      logo = :logo
                    WHERE id = :id';
            $requete = self::$db->prepare($sql);
            $requete->bindValue(':id', $id, PDO::PARAM_INT);
            $requete->bindValue(':nom', $statement['nom'], PDO::PARAM_INT);
            $requete->bindValue(':departement', $statement['departement'], PDO::PARAM_STR);
            $requete->bindValue(':url', $statement['url'], PDO::PARAM_STR);
            $requete->bindValue(':region', $statement['region'], PDO::PARAM_STR);
            $requete->bindValue(':secteur', $statement['secteur'], PDO::PARAM_STR);
            $requete->bindValue(':logo', $statement['logo'], PDO::PARAM_STR);
            $requete->execute();

            if ($requete->errorCode() !== "00000") {
                throw new \Exception('Argh database');
            }
        }
    }
}

