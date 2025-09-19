<?php

    $nomepagina = "MagodosPcs - Inicio";

    $css = "../../css/estilos.css";

?>

<!DOCTYPE html>
<html lang="pt-br">

    <!-- CHAMANDO O head.php QUE ESTA DENTRO DE VIEWS -->
    <?php include_once __DIR__ . "/../views/head.php"; ?>
    
<body>

    <?php 
    
        include_once __DIR__ . "/../views/header.php"; 

        include_once __DIR__ . "/../views/paginaInicial.php";

        include_once __DIR__ . "/../views/footer.php"
    
    ?>

</body>
</html>