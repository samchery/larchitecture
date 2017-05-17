<?php

namespace Model;
use \Helper\Model;
use \PDO;

/**
 * Class RevuesModel
 * Va gérer toutes les modifications de la table revues de la bdd
 * @package Controller
 */
class RevuesModel extends Model
{
    /**
     * @param null $id
     * @param null $limit
     * @return array | bool
     * @throws \Exception
     * Suivant les cas, la méthode va :
     * - sélectionner toutes les entrées de la table revues
     * - sélectionner une entrée correspondant à l'id passée en paramètre
     */
    public function select($id = Null){
        if($id == Null){
            $sql = 'SELECT 
                      id, 
                      numero, 
                      img, 
                      region, 
                      zone, 
                      datepub 
                    FROM revues';
            $requete = self::$db->query($sql);

            return $requete->fetchAll(PDO::FETCH_OBJ);
        } else {
            $sql = 'SELECT 
                  id, 
                  numero, 
                  img, 
                  region, 
                  zone, 
                  datepub 
                FROM revues
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
                      numero, 
                      img, 
                      region, 
                      zone, 
                      datepub 
                    FROM revues
                    LIMIT :limitation';
        $requete = self::$db->prepare($sql);
        $requete->bindValue(':limitation', $limation, PDO::PARAM_INT);
        $requete->execute();

        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectByRegion($region){
        $sql = 'SELECT 
                      id, 
                      numero, 
                      img, 
                      region, 
                      zone, 
                      datepub 
                    FROM revues
                    WHERE region = :region';
        $requete = self::$db->prepare($sql);
        $requete->bindValue(':region', $region, PDO::PARAM_STR);
        $requete->execute();

            if ($requete->errorCode() !== "00000") {
                throw new \Exception('Argh database');
            }

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
            $sql = 'INSERT INTO revues(
                      id, 
                      numero, 
                      img, 
                      region, 
                      zone, 
                      datepub)                 
                    VALUES(
                      NULL, 
                      :numero, 
                      :img, 
                      :region, 
                      :zone, 
                      :datepub)';
            $requete = self::$db->prepare($sql);
            $requete->bindValue(':numero', $statement['numero'], PDO::PARAM_INT);
            $requete->bindValue(':img', $statement['img'], PDO::PARAM_STR);
            $requete->bindValue(':region', $statement['region'], PDO::PARAM_STR);
            $requete->bindValue(':zone', $statement['zone'], PDO::PARAM_STR);
            $requete->bindValue(':datepub', $statement['datepub'], PDO::PARAM_STR);
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
            $sql = 'DELETE FROM revues WHERE id = :id';
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
            $sql = 'UPDATE revues 
                    SET 
                      numero = :numero, 
                      img = :img, 
                      region = :region, 
                      zone = :zone, 
                      datepub = :datepub                 
                    WHERE id = :id';
            $requete = self::$db->prepare($sql);
            $requete->bindValue(':id', $id, PDO::PARAM_INT);
            $requete->bindValue(':numero', $statement['numero'], PDO::PARAM_INT);
            $requete->bindValue(':img', $statement['img'], PDO::PARAM_STR);
            $requete->bindValue(':region', $statement['region'], PDO::PARAM_STR);
            $requete->bindValue(':zone', $statement['zone'], PDO::PARAM_STR);
            $requete->bindValue(':datepub', $statement['datepub'], PDO::PARAM_STR);
            $requete->execute();

            if ($requete->errorCode() !== "00000") {
                throw new \Exception('Argh database');
            }
        }
    }
}

