Swal.fire(
    '¿Pensando a donde viajar?',
    'Esta Segur@ del clima?',
    'question'
  )

function enviarCiudad(thisme){
    var valor = $(thisme).attr("data-ciudad");
    $.ajax({
        url : '/prueba/controlador/controlador.php',        
        data : { valor : valor, action:'validarCiudad' },
        type : 'POST', 
        dataType:'json',   
        success : function(resp) {
            $("#lbl_estado_clima").html(resp.weather);
            $("#lbl_temperatura").html(resp.temp);
            $("#lbl_humedad").html(resp.humidity);
            if(valor == 'Bogotá'){
                var image = "<img src='/prueba/imagenes/bogota.jpg'></img>"
            }
            if(valor == 'Orlando'){
                var image = "<img src='/prueba/imagenes/orlando.jpg'></img>"
            }
            if(valor == 'New York'){
                var image = "<img src='/prueba/imagenes/newYork.jpg'></img>"
            }
            if(valor == 'miami'){
                var image = "<img src='/prueba/imagenes/miami.jpg'></img>"
            }
            $("#img_ciudad").html(image)
        }
    });   
}

function iniciarTour(){
    introJs().start();
}