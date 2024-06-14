<?php

class Router
{
    public function __construct()
    {
        
    }
    
    public function handleRequest(? string $route): void
    {
        //si route est diférent de null et qu'il est égale à 'home'
         if($route !== null && $route === 'home')//amène à la page d'accueil
         {
             echo "je suis la page d'accueil";
         }
         else if($route !== null && $route === 'categories')//amène sur une page qui liste les catégories
         {
             echo "je suis la page  qui affiche à la liste des catégories";
         }
         else if($route !== null && $route === 'category&category=id_category')//route = category&category=id_categoryamène sur la page d'une catégorie (qui liste les posts de cette catégorie)
         {
             echo "je sui la page qui affiche la page d'une catégory";
         }
         else if($route !== null && $route === 'post&post=post_id' )//amène vers la page d'un post (qui affiche le contenu de ce post)
         {
             echo "je sui la page qui affiche la page d'une post";
         }
         else if($route === null)
         {
             echo "pas de route";
         }
         else
         {
             echo "je suis la page n'exite pas";
         }
    }
}