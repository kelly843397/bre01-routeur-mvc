<?php

class Router 
{
    public function__construct()
    {
        
    }
    
    public function handleRequest(array $get): void 
    {
        // condition si la clé "route" existe dans le tableau $get et auquel cas sa valeur est égale à "a-propos"
        if (isset($get["route"]) && $get["route"] === "a-propos") {
            // création d'une instance de PageController
            $pageController = new PageController();
            // appelle la méthode 'about' de PageController
            $pageController->about();
        }
        // Condition si $get ["route"] n'existe pas
        elseif (!isset($get["route"])) {
            // création d'une instance de PageController
            $pageController = new PageController();
            // appelle la méthode 'home' de PageController
            $pageController->home();
        }
        // les cas autres
        else {
            // création d'une instance de PageController
            $pageController = new PageController();
            // appelle la méthode '404' de PageController
            $pageController->error404();
        }
    }
}

?>