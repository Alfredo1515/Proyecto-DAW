<?php
    
    
    if(isset($_POST['enviar'])){
        $alumno = new Alumno();
        echo "hola";

        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];

        $alumno->get($usuario);
        $data = $alumno->get_rows();

        if(count($this->rows) > 0){
            echo "Usuario no válido";
        }else{
            if($data[0]['usuario_pass'] == $pass){
                echo "Te has conectado";
            }
        }
    }
?>

<div class = "sesion">
    <form action = "index.php?p=login" method = "POST" enctype = "text/plain">
        <div class="creedenciales" id="usuario">
            <p>USUARIO</p>
            <input type="text" name = "usuario" size="20" maxlength="10" />
        </div>
        <div class="creedenciales" id="pass">
            <p>CONTRASEÑA</p>
            <input type="password" name = "pass" size="20" maxlength="10" />
        </div>

        <input type="submit" name="enviar" value="Enviar" />

        <span>¿No estas registrado?<span>
        <span><a href="index.php?p=registro">Registrate</a></span>
    </form>
</div>