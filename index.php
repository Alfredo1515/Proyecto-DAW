<?php 
    require_once("header.php");
?>

<div class="contenido">
    
    <?php
        if($p == "login"){
            include_once("login.php");
        }else if($p == "registro"){
            include_once("registro.php");
        }else if($p == "registroCompleto"){
            include_once("registroCompleto.php");
        }else if($p == "inicio"){
            if(isset($_SESSION['usuario'])){
                include_once("inicio.php");
            }else{
                include_once("sesionInactiva.php");
            }
        }else if($p == "logout"){
            session_destroy();
            header("location: index.php");
        }else{
            include_once("login.php");
        }
    ?>
</div>

<?php
    require_once("footer.php");
?>