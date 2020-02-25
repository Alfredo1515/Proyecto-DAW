
$(document).ready(function(){
    $("#enviarRegistro").prop('disabled', true);

    $("input").blur(function(){
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
            var expReg = /\d{2}[/]\d{2}[/]\d{4}/;
            if(!expReg.test($(this).val())){
                $(this).next().text("Este campo debe de estar relleno. Formato dd/mm/yyyy");

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

        $(".error").each(function(){
            if($(this).text() != ""){
                errores = true;

            }

        });

        if(checkbox){
            $("#errorCheckbox").text("");
        }else{
            $("#errorCheckbox").text("Debe seleccionarse al menos un campo")
        }

        if(contenido && !errores){
            $("#enviarRegistro").prop('disabled', false);
        }else{
            $("#enviarRegistro").prop('disabled', true);
        }
    });
});

