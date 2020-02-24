

$(document).ready(function(){
    /* $("#enviarRegistro").prop('disabled', true); */
    $("input").blur(function(){
        if($(this).attr('name') == "dni"){
            var expReg = /\d{8}[A-z]{1}/
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
            
        }
    });
});

