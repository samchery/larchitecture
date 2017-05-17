<?php

namespace Controller;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

/**
 * Class FrontController
 * @package Controller
 */
class FrontController
{

    /**
     * FrontController constructor.
     */
    public function __construct()
    {
        // router
        $locator = new FileLocator(array(__DIR__));
        $loader = new YamlFileLoader($locator);
        $collection = $loader->load(dirname(__DIR__).'/config/routes.yml');
        $context = new RequestContext(
            $_SERVER['REQUEST_URI'],
            $_SERVER['REQUEST_METHOD'],
            $_SERVER['HTTP_HOST']
        );
        $matcher = new UrlMatcher($collection, $context);
        $parameters = $matcher->match($_SERVER['REQUEST_URI']);

        // recuperation de la classe et de la methode
        list($routeController, $routeMethod) = explode('::', $parameters['_controller']);
        // test sur la classe
        if (!class_exists($routeController)) {
            throw new \BadFunctionCallException('Router :: Controller inexistant');
        }
        $controller = new $routeController();
        // test sur la methode
        if (!method_exists($controller, $routeMethod)) {
            throw new \BadFunctionCallException('Router :: Methode inexistante');
        }
        // instanciation du controller
        $output = $controller->$routeMethod();
        echo $output;
    }
}













/**
 * Class FrontController
 * Permet de gérer les actions en fonction des paramètres passés dans l'url
 */
/*class FrontController
{
    public function __construct()
    {
        Connect::getPDO();

        // ordre de priorité des valeurs que prendra $a
        $a = $_GET['a'] ?? $_POST['a'] ?? '' ;

        // différents cas de paramètres passés dans l'url
        switch($a){
            case 'ajouter' :
                $controller = new RevuesController();
                echo $controller->addAction();
                break;
            case 'supp' :
                $controller = new RevuesController();
                echo $controller->deleteAction($_GET['id']);
                break;
            case 'modifier' :
                $controller = new RevuesController();
                echo $controller->updateAction($_GET['id']);
                break;
            case 'zone' :
                $controller = new RevuesController();
                echo $controller->regionAction($_GET['region']);
                break;
            default :
                $controller = new RevuesController();
                echo $controller->listAction();
                break;
        }
    }
}*/
