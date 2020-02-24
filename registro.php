<?php
    echo var_dump($_POST);
    if(isset($_POST['enviar'])){
        echo("Ahora si que esta bien el repositorio");
    }
?>

<form action="index.php?p=registro" method="POST" enctype="text/plain">
    <fieldset class="field">
        <legend>1. Datos Personales</legend>
        <span>DNI: </span><input type="text" name="dni" size="20" maxlength="20" />
        <span>Nombre: </span><input type="text" name="nombre" size="20" maxlength="20" />
        <span>Apellidos: </span><input type="text" name="apellidos" size="20" maxlength="20" />
        <span>Fecha de nacimiento: </span><input type="text" name="fechaNac" size="20" maxlength="20" />
        <span>Direccion: </span><input type="text" name="direccion" size="20" maxlength="20" />
        <span>Correo: </span><input type="text" name="correo" size="20" maxlength="20" />
        <span>Telefono personal: </span><input type="text" name="telefono" size="20" maxlength="20" />
    </fieldset>
    <fieldset class="field" id="academicos">
        <legend>2. Datos academicos</legend>
        <span>¿Que tipo de titulos posees?</span>
        <select name="tipoEstudio" id="tipoEstudio">
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

        <input type="submit" name="enviar" value="Enviar" /><input type="button" name="borrar" value="borrar" />
    </fieldset>
</form>