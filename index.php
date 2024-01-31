<?php

require '../config/autoload.php';

// création de la nouvelle instance router
$router = new rooter();

// Appel de la méthode handleRequest avec la superglobale $_get
$router->handleRequest($_GET);

?>