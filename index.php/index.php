<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

require '../config/autoload.php';

// création de la nouvelle instance router
$router = new rooter();

// Appel de la méthode handleRequest avec la superglobale $_get
$router->handleRequest($_GET);

?>