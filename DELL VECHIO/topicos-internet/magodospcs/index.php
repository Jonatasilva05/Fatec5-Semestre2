<?php

    # Recebe todas as URI que vem do servidor, (requisições que vem do servidor), incluindo argumentos
    $uritotal = $_SERVER["REQUEST_URI"];

    # Função do PHP para dividir a uri em partes
    $partes = parse_url($uritotal);

    echo "<pre>";
    var_dump($partes);
    echo "</pre>";

    die(); # 'Mata' os testes, a partir daqui não haverá mais teste

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