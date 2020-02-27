$(document).ready(function(){
    var cont = 0;
    $("select").change(function(){
        var estudio = $(this).val();
        if(estudio == "Grado Universitario"){
            $("#academicos").append("<span>Nombre del Grado Universitario: </span><input type='text' name='estudio" + cont + "' size='20' maxlength='20' />");
            $("#academicos").append("<span>Centro: </span><input type='text' name='centro" + cont + "' size='20' maxlength='20' />");
            $("#academicos").append("<span>Fecha de finalización: </span><input type='text' name='fechaFin" + cont + "' size='20' maxlength='20' />");
        }else if(estudio == "ESO"){
            $("#academicos").append("<span>Centro: </span><input type='text' name='centro" + cont + "' size='20' maxlength='20' />");
            $("#academicos").append("<span>Fecha de finalización: </span><input type='text' name='fechaFin" + cont + "' size='20' maxlength='20' />");
        }else if(estudio == "Bachiller"){
            $("#academicos").append("<span>Centro: </span><input type='text' name='centro" + cont + "' size='20' maxlength='20' />");
            $("#academicos").append("<span>Fecha de finalización: </span><input type='text' name='grado" + cont + "' size='20' maxlength='20' />");
        }else if(estudio == "Ciclo formativo"){
            $("#academicos").append("<span>Nombre del grado: </span><input type='text' name='estudio" + cont + "' size='20' maxlength='20' />");
            $("#academicos").append("<span>Centro: </span><input type='text' name='centro" + cont + "' size='20' maxlength='20' />");
            $("#academicos").append("<span>Fecha de finalización: </span><input type='text' name='grado" + cont + "' size='20' maxlength='20' />");
        }else if(estudio == "otros"){
            $("#academicos").append("<span>Nombre del estudio: </span><input type='text' name='estudio" + cont + "' size='20' maxlength='20' />");
            $("#academicos").append("<span>Centro: </span><input type='text' name='centro" + cont + "' size='20' maxlength='20' />");
            $("#academicos").append("<span>Fecha de finalización: </span><input type='text' name='grado" + cont + "' size='20' maxlength='20' />");
        }
        cont++;
    });
});