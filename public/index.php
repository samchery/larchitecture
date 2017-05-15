<?php
ini_set('display_errors', 1);


require_once "../vendor/autoload.php";

$cc = new \App\Database();

$post = $cc->query('SELECT * FROM revues');
var_dump($post);
