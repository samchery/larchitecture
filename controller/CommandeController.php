<?php

namespace Controller;

use Helper\Controller;
use Model\ActusModel;

class CommandeController extends Controller
{
    public function afficheCommande()
    {
        return self::$twig->render('front/commander.html.twig');
    }
}