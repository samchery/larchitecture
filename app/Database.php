<?php
/**
 * Created by PhpStorm.
 * User: chery
 * Date: 15/05/2017
 * Time: 15:06
 */

namespace App;
use \PDO;

class Database
{

    private $db_name;
    private $db_pass;
    private $db_host;
    private $db_user;
    private $pdo;

    /**
     * Database constructor.
     * @param $db_name
     * @param $db_pass
     * @param $db_host
     * @param $db_user
     */
    public function __construct($db_name='architecture', $db_pass='root', $db_host='localhost', $db_user='root')
    {
        $this->db_name = $db_name;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
        $this->db_user = $db_user;
    }

    private function getPdo()
    {
        if (!isset($pdo)) {
            $pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host, $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET NAMES UTF8");
            $pdo = $this->pdo;
        }
        return $pdo;
    }

    public function query($statment)
    {
        $req = $this->getPdo()->query($statment);
        $datas = $req->fetch(PDO::FETCH_OBJ);
        return $datas;
    }
}


