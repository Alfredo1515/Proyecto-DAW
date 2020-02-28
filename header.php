<?php
session_start();

    if(isset($_SESSION['usuario'])){
        $usuario = $_SESSION['usuario'];
        $pass = $_SESSION['pass'];
    }
    include_once("clases/db_abstract_model.php");
    include_once("clases/alumno_model.php")
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Bolsa de trabajo IES Macia Abela</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style2.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="scripts/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="scripts/proyecto2.js" type="text/javascript"></script> 
        <script src="scripts/validacion2.js" type="text/javascript"></script> 
    </head>
 
    <body>

    <header>

    <div id="superior"><h1>Bolsa de trabajo IES Macia Abela</h1></div>

    </header>

    <?php
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }else{
            $p = "login";
        }
    ?>