<?php

class PageController {
    
    public function home(): void {
        // initialisation de la variable route
        $route = "home";
        
        require ('templates/layout.phtml');
    }
    
    public function about(): void {
        // initialisation de la variable route
        $route = "about";
        
        require ('templates/layout.phtml');
    }
    
    public function 404(): void {
        // initialisation de la variable route
        $route = "404";
        
        require ('templates/layout.phtml');
    }
}

?>