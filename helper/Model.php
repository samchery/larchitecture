<?php

namespace Helper;

class Model
{
    protected static $db;

    public function __construct()
    {
        self::$db = Connect::getPDO() ;
    }

}