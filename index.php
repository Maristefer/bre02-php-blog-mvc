<?php

require_once "config/autoload.php";

//on va recupéré la valeur du paramètre $_GET['route'] si il existe,
    if(isset($_GET['route']) && $_GET['route'] !== "")
    {
        //si existe on la recupère dans la variable $route
        $route = $_GET['route'];
    }
    else
    {
        //si'il n'existe pas la variable vaut null
        $route = null;
    }

$router = new Router();

$router->handleRequest($route);