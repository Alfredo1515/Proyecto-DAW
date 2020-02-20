<h1>REGISTRO</h1>

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
</form>