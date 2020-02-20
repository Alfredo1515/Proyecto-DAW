<h1>HEADER</h1>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Bolsa de trabajo IES Macia Abela</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="scripts/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="scripts/proyecto.js" type="text/javascript"></script> 
    </head>
 
    <body>

    <?php
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }else{
            $p = "indice";
        }
    ?>