<?php

    $uri = $_SERVER["REQUEST_URI"];

    if($uri == "/"){
        include __DIR__ . "/app/controllers/inicioController.php";
    }
    else
        if($uri == "/quemsomos"){
        include __DIR__ . "/app/controllers/quemsomosController.php";
    }
    else
        if($uri == "/contato"){
        include __DIR__ . "/app/controllers/contatoController.php";
    }

?>