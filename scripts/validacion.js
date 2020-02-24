

$(document).ready(function(){
    /* $("#enviarRegistro").prop('disabled', true); */
    $("input").blur(function(){
        if($(this).attr('name') == "dni"){
            var expReg = /\d{8}[A-z]{1}/
            if(!expReg.test($(this).val())){
                document.getElementById("errDni").innerHTML = "DNI no válido";
            }else{
                
            }
        }
    });
});

