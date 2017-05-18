<?php

namespace Model;
use \Helper\Model;
use \PDO;

/**
 * Class RevuesModel
 * Va gérer toutes les modifications de la table revues de la bdd
 * @package Controller
 */
class ActusModel extends Model
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
                      datepub, 
                      architecte, 
                      titre,
                      type, 
                      lieu,
                      description,
                      mainimage,
                      resum
                    FROM actus';
            $requete = self::$db->query($sql);

            return $requete->fetchAll(PDO::FETCH_OBJ);
        } else{
            $sql = 'SELECT 
                      id, 
                      datepub, 
                      architecte, 
                      titre, 
                      type, 
                      lieu,
                      description,
                      mainimage,
                      resum
                FROM actus
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

    public function getLast($limation){
        $limation = (int) $limation;
        $sql = 'SELECT 
                      id, 
                      datepub, 
                      architecte, 
                      titre, 
                      type, 
                      lieu,
                      description,
                      mainimage,
                      resum
                    FROM actus
                    LIMIT :limitation';
        $requete = self::$db->prepare($sql);
        $requete->bindValue(':limitation', $limation, PDO::PARAM_INT);
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
            $sql = 'INSERT INTO actus(
                      id, 
                      datepub, 
                      architecte, 
                      titre, 
                      type, 
                      lieu,
                      description,
                      mainimage,
                      resum)                 
                    VALUES(
                      NULL, 
                      :datepub, 
                      :architecte, 
                      :titre, 
                      :type, 
                      :lieu,
                      :description,
                      :mainimage,
                      :resum)';
            $requete = self::$db->prepare($sql);
            $requete->bindValue(':datepub', $statement['datepub'], PDO::PARAM_INT);
            $requete->bindValue(':architecte', $statement['architecte'], PDO::PARAM_STR);
            $requete->bindValue(':titre', $statement['titre'], PDO::PARAM_STR);
            $requete->bindValue(':type', $statement['type'], PDO::PARAM_STR);
            $requete->bindValue(':lieu', $statement['lieu'], PDO::PARAM_STR);
            $requete->bindValue(':description', $statement['description'], PDO::PARAM_STR);
            $requete->bindValue(':mainimage', $statement['mainimage'], PDO::PARAM_STR);
            $requete->bindValue(':resum', $statement['resum'], PDO::PARAM_STR);
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
            $sql = 'DELETE FROM actus WHERE id = :id';
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
            $sql = 'UPDATE actus 
                    SET 
                      datepub = :datepub, 
                      architecte = :architecte, 
                      titre = :titre, 
                      type = :type, 
                      lieu = :lieu,
                      description = :description,
                      mainimage = :mainimage,
                      resum = :resum
                    WHERE id = :id';
            $requete = self::$db->prepare($sql);
            $requete->bindValue(':id', $id, PDO::PARAM_INT);
            $requete->bindValue(':datepub', $statement['datepub'], PDO::PARAM_INT);
            $requete->bindValue(':architecte', $statement['architecte'], PDO::PARAM_STR);
            $requete->bindValue(':titre', $statement['titre'], PDO::PARAM_STR);
            $requete->bindValue(':type', $statement['type'], PDO::PARAM_STR);
            $requete->bindValue(':lieu', $statement['lieu'], PDO::PARAM_STR);
            $requete->bindValue(':description', $statement['description'], PDO::PARAM_STR);
            $requete->bindValue(':mainimage', $statement['mainimage'], PDO::PARAM_STR);
            $requete->bindValue(':resum', $statement['resum'], PDO::PARAM_STR);
            $requete->execute();

            if ($requete->errorCode() !== "00000") {
                throw new \Exception('Argh database');
            }
        }
    }
}

