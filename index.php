<?php 
    require_once("header.php");
?>

<div class="contenido">
    <?php
        if($p == "indice"){
            include_once("indice.php");
        }else if($p == "registro"){
            include_once("registro.php");
        }
    ?>
</div>

<?php
    require_once("footer.php");
?>