<?php

##gére la page d'accueil et les 404
class PageControllers
{
    
    public function __construct()
    {
        
    }
    
    public function home()
    {
        $template = "templates/home.phtml";
        
        require "templates/layout.html";
    }
    
    public function notFound()//(si la route n'existe pas, la catégorie n'existe pas ou le post n'existe pas)
    {
        if(!isset($route) && !isset($route === "category&category=id_category") || )
        {
            $template = "templates/404.phtml";
        
        require "templates/layout.html";
        }
        
    }
    
}