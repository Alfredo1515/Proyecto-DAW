
$(document).ready(function(){
    $("#enviarRegistro").prop('disabled', true);

    $("input").on('keyup click', function(){
        if($(this).attr('name') == "dni"){
            var expReg = /\d{8}[A-z]{1}/;
            if(!expReg.test($(this).val())){
                $(this).next().text("DNI no válido");

            }else{
                $(this).next().text("");

            }
            
        }else if($(this).attr('name') == "nombre" || $(this).attr('name') == "apellidos"){
            var expReg = /[A-z]{1,}/
            if(!expReg.test($(this).val())){
                $(this).next().text("Este campo debe de contener algo");

            }else{
                $(this).next().text("");

            }

        }else if($(this).attr('name') == "fechaNac"){
            var expReg = /\d{4}[-]\d{2}[-]\d{2}/;
            if(!expReg.test($(this).val())){
                $(this).next().text("Este campo debe de estar relleno. Formato yyyy-MM-DD");

            }else{
                $(this).next().text("");

            }

        }else if($(this).attr('name') == "correo"){
            expReg = /\w{1,}@\w{1,}.com$/;
            if(!expReg.test($(this).val())){
                $(this).next().text("Correo incorrecto. Ejemplo: correoEjemplo1234@correo.com");

            }else{
                $(this).next().text("");

            }

        }else if($(this).attr('name') == "telefono"){
            expReg = /\d{9,11}/;
            if(!expReg.test($(this).val())){
                $(this).next().text("Número de telefono no válido.");

            }else{
                $(this).next().text("");

            }

        }else if($(this).attr('name') == "empfct"){
            expReg = /\w{1,}/;
            if(!expReg.test($(this).val())){
                $(this).next().text("Este campo debe de contener algo.");

            }else{
                $(this).next().text("");

            }

        }else if($(this).attr('name') == "contraseña"){
            expReg = /\w{5,15}/;
            if(!expReg.test($(this).val())){
                $(this).next().text("La contraseña debe de contener al menos 5 caracteres alfanumericos.");

            }else{
                $(this).next().text("");
                contraseña = $(this).val();
            }

        }else if($(this).attr('name') == "repiteContraseña"){
            if($(this).val() != contraseña){
                $(this).next().text("Los campos no coinciden.");

            }else{
                $(this).next().text("");
            }
        }

        var contenido = true;
        var errores = false;
        var checkbox = false;

        $("input[type=checkbox]").each(function(){
            if($(this).prop("checked") == true){
                checkbox = true;
            }
        });

        $(".obligatorio").each(function(){
            if($(this).val() == ""){
                contenido = false;

            }

        });

        

        if(checkbox){
            $("#errorCheckbox").text("");
        }else{
            $("#errorCheckbox").text("Debe seleccionarse al menos un campo")
        }

        $(".error").each(function(){
            if($(this).text() != ""){
                errores = true;

            }

        });

        if(contenido && !errores){
            $("#enviarRegistro").prop('disabled', false);
        }else{
            $("#enviarRegistro").prop('disabled', true);
        }
    });
});

