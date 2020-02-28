<?php
session_start();

    if(!isset($_SESSION['usuario'])){
        ?>
        <div class="box">
            <h3>No puedes acceder sin tener una sesión iniciada</h3>
            <div class="vinculo"><a href="index.php?p=login">Iniciar sesión</a></div>
        </div>
        <?php
    }
    include_once("clases/db_abstract_model.php");
    include_once("clases/alumno_model.php")
?>

<h1>HEADER</h1>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Bolsa de trabajo IES Macia Abela</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="scripts/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="scripts/proyecto2.js" type="text/javascript"></script> 
        <script src="scripts/validacion2.js" type="text/javascript"></script> 
    </head>
 
    <body>

    <?php
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }else{
            $p = "indice";
        }
    ?>