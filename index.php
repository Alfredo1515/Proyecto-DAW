<?php 
    require_once("header.php");
?>

<div class="contenido">

    <?php

        if(isset($_SESSION['usuario'])){
            ?>
            <nav class='menuLateral menu'>
                <a href='#'>lorem1</a>
                <a href='#'>lorem2</a>
                <a href='#'>lorem3</a>
                <a href='#'>lorem4</a>
                <a href='#'>lorem5</a>
            </nav>
        <?php
        }
        ?>

    <div class = "cuerpo">

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
            }else if($p == "confi"){
                if(isset($_SESSION['usuario'])){
                    include_once("configuracion.php");
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

    
</div>

<?php

    require_once("footer.php");
?>