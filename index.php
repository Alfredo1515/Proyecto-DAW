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
        }else{
            include_once("login.php");
        }
    ?>
</div>

<?php
    require_once("footer.php");
?>