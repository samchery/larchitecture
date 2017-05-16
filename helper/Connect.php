<?php

namespace Helper;
use \PDO;

class Connect
{
    /**
     * CONST de connexion
     */
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';
    const DB_NAME = 'architecture';

    /**
     * @var null permet de faire 1 seule et unique connexion
     */
    private static $pdo = null;

    /**
     * @return \PDO $pdo
     */
    public static function getPDO()
    {
        if(is_null(self::$pdo)) {
            try{
                self::$pdo = new PDO('mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_HOST , self::DB_USER , self::DB_PASS);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->exec("SET NAMES UTF8");
            } catch(\Exception $exception)  {
                die('Erreur :' . $exception->getMessage());
            }
        }

        return self::$pdo;
    }
}
