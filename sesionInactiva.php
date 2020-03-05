<?php
    if(!isset($_SESSION['usuario'])){
        ?>
        <div class="centrada">
            <div class="mensaje alert">
                <h3>No puedes acceder sin tener una sesión iniciada</h3>
                <a href="index.php?p=login"><button>Iniciar sesión</button></a>
            </div>
        </div>
        <?php
    }
?>