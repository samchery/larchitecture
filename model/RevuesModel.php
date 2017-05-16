<?php

namespace Model;
use \Helper\Model;
use \PDO;

/**
 * Class revues
 * @package Controller
 */
class RevuesModel extends Model
{
    /**
     * methode qui sélectionne toutes entrées de la table revues ou avec un id
     * @param null $id
     * @return array | bool
     * @throws \Exception
     */
    public function select($id = Null){
        if($id === Null){
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
        } elseif (is_int($id)){
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

            // VERIF BIND OK :
            if ($requete->errorCode() !== "00000") {
               throw new \Exception('Arg database');
            }

            return $requete->fetch(PDO::FETCH_OBJ);
        }
    }

    /**
     * methode qui ajoute une entrée à la table revues
     * @param $statement
     * @return string
     * @throws \Exception
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

            // VERIF BIND OK :
            if ($requete->errorCode() !== "00000") {
                throw new \Exception('Arg database');
            }

            return self::$db->lastInsertId();
        }
    }

    /**
     * methode supprime une entrée (celle de l'id) à la table revues
     * @param $id
     * @return null
     * @throws \Exception
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
     * methode qui met à jour toutes entrées de la table revues pour l'id
     * @param $statement
     * @param $id
     * @return null
     * @throws \Exception
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

            // VERIF BIND OK :
            if ($requete->errorCode() !== "00000") {
                throw new \Exception('Arg database');
            }
        }
    }
}

