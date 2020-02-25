<?php
    if(isset($_POST['enviar'])){
        echo("Ahora si que esta bien el repositorio");
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
    </fieldset>
    <fieldset class="field" id="academicos">
        <legend>2. Datos academicos</legend>
        <span>¿Que tipo de titulos posees?</span>
        <select name="tipoEstudio" id="tipoEstudio" selected="none">
            <option>Grado Universitario</option>
            <option>Bachiller</option>
            <option>ESO</option>
            <option>Ciclo formativo</option>
            <option>otros</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>3. Cursos en el centro</legend>
        <p>Introduce los ciclos cursados en este centro: </p>
        <ul>
            <li>FPB<input type = "checkbox" name = "fpb" /><br></li>
            <li>SMR<input type = "checkbox" name = "smr" /><br></li>
            <li>DAW<input type = "checkbox" name = "daw" /><br></li>
        </ul>
        <span id="errorCheckbox" class="error"></span>

        <input type="submit" name="enviar" value="Enviar" id="enviarRegistro" /><input type="button" name="borrar" value="borrar" />
    </fieldset>
</form>