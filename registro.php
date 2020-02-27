<?php
    if(isset($_POST['enviar'])){
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $fechaNac = $_POST['fechaNac'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $estudio_ESO = $_POST['estudio_ESO'];
        $estudio_batchiller = $_POST['estudio_batchiller'];
        $estudio_ciclo = $_POST['estudio_ciclo'];
        $estudio_universidad = $_POST['estudio_universidad'];
        $empresa_FCT = $_POST['empfct'];
        $usuario_pass = $_POST['contraseña'];
        $estudiosCentro = "";
        $usuario = "user";
        
        if(isset($_POST['fpb'])){
            if($_POST['fpb'] == "on"){
                $estudiosCentro = $estudiosCentro."fpb;";
            }

        }
        
        if(isset($_POST['smr'])){
            if($_POST['smr'] == "on"){
                $estudiosCentro = $estudiosCentro."smr;";
            }
        }

        if(isset($_POST['daw'])){
            if($_POST['daw'] == "on"){
                $estudiosCentro = $estudiosCentro."daw;";
            }

        }

        $estudiosCentro = substr($estudiosCentro, 0, strlen($estudiosCentro)-1);
        $alumno = new Alumno();
        $alumno->get($dni);
        $datos = $alumno->get_rows();
        
        $data = array(
            "dni" => "$dni",
            "nombre" => "$nombre",
            "apellidos" => "$apellidos",
            "fecha_Nacimiento" => "$fechaNac",
            "direccion" => "$direccion",
            "correo" => "$correo",
            "telefono" => "$telefono",
            "estudio_ESO" => "$estudio_ESO",
            "estudio_batchiller" => "$estudio_batchiller",
            "estudio_ciclo" => "$estudio_ciclo",
            "estudio_universidad" => "$estudio_universidad",
            "estudios_centro" => "$estudiosCentro",
            "empresa_FCT" => "$empresa_FCT",
            "tipo_usuario" => "$usuario",
            "usuario_pass" => "$usuario_pass"
        );

        
        $alumno->set($data);
        if($alumno->msg != ""){
            header('location: index.php?p=registroCompleto');
        }else{
            echo $alumno->error;
        }
        
    }
?>

<form action="index.php?p=registro" method="POST" enctype="multipart/form-data" id="FormReg">
    <fieldset class="field">
        <legend>1. Datos Personales</legend>
        <span>DNI: </span><input type="text" name="dni" size="50" maxlength="50" class="obligatorio" /><span class="error"></span><br>
        <span>Nombre: </span><input type="text" name="nombre" size="50" maxlength="50" class="obligatorio" /><span class="error"></span><br>
        <span>Apellidos: </span><input type="text" name="apellidos" size="50" maxlength="50" class="obligatorio" /><span class="error"></span><br>
        <span>Fecha de nacimiento: </span><input type="text" name="fechaNac" size="50" maxlength="50" class="obligatorio" /><span class="error"></span><br>
        <span>Direccion: </span><input type="text" name="direccion" size="50" maxlength="50" /><span></span><br>
        <span>Correo: </span><input type="text" name="correo" size="50" maxlength="50" class="obligatorio" /><span class="error"></span><br>
        <span>Telefono personal: </span><input type="text" name="telefono" size="50" maxlength="50" class="obligatorio" /><span class="error"></span><br>
        <span>Contraseña: </span><input type="password" name="contraseña" size="50" maxlength="50" class="obligatorio" /><span class="error"></span><br>
        <span>Confirmar contraseña: </span><input type="password" name="repiteContraseña" size="50" maxlength="50" class="obligatorio" /><span class="error"></span>
    </fieldset>
    <fieldset class="field" id="academicos">
        <legend>2. Datos academicos</legend>
        <span>ESO</span><input type="text" name="estudio_ESO" size="50" maxlength="50" /><br>
        <span>Batchiller</span><input type="text" name="estudio_batchiller" size="50" maxlength="50" /><br>
        <span>Otros ciclos</span><input type="text" name="estudio_ciclo" size="50" maxlength="50" /><br>
        <span>Titulo Universitario</span><input type="text" name="estudio_universidad" size="50" maxlength="50" /><br>
    </fieldset>
    <fieldset>
        <legend>3. Cursos en el centro</legend>
        <p>Introduce los ciclos cursados en este centro: </p>
        <ul>
            <li>FPB<input type = "checkbox" name = "fpb" /><br></li>
            <li>SMR<input type = "checkbox" name = "smr" /><br></li>
            <li>DAW<input type = "checkbox" name = "daw" /><br></li>
        </ul>
        <span id="errorCheckbox" class="error"></span><br>
        <span>Empresa en la que realizo las FCT(en caso de ser varias, la más reciente): </span><input type="text" name="empfct" size="50" maxlength="50" class="obligatorio" /><span class="error"></span><br>

        <input type="submit" name="enviar" value="Enviar" id="enviarRegistro" /><input type="button" name="borrar" value="borrar" />
    </fieldset>
</form>