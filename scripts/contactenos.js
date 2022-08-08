(function($){
    $(function(){
        // DOM ready
        $('#enviarMail').click(function(e){
            e.preventDefault();
            validar();
        });
    });

    // Run immediately
})(jQuery);

function validar(){
    let nombre = $('#nombre').val();
    let correo = $('#correo').val();
    let telefono = $('#telefono').val();
    let maestria = $('#maestria').val();
    let mensaje = $('#mensaje').val();
    let box = '.validacion';
    
    if (!checkName(nombre)) {
        showValidationMsj('#nombre', box, 'Escriba su nombre y apellido.');
    } else if(!checkEmail(correo)){
        showValidationMsj('#correo', box, 'Escriba una dirección de correo válida.');
    } else if(!checkTel(telefono)){
        showValidationMsj('#telefono', box, 'Escriba su número de teléfono o de celular sin guiones ni espacios.');
    } else if(maestria === null){
        showValidationMsj('#asunto', box, 'Elija la Maestría de su interés.');
    } else if(!checkString(mensaje)){
        showValidationMsj('#mensaje', box, 'Escriba el mensaje que desea enviarnos.');
    } else {
        $.ajax({
            url: 'process/contactenos.php',
            method: 'POST',
            data: JSON.stringify({"nombre": nombre, "correo": correo, "telefono": telefono, "maestria": maestria, "mensaje": mensaje}),
            beforeSend: function(){$(box).html('<div uk-spinner class="texto-verde"></div>');},
            error: function(){$(box).html('Tenemos un inconveniente en este proceso. Por favor vuelve a intentarlo. (2)');},
            success: function(respuesta, status, xhr){
                if(xhr.getResponseHeader('Content-type') === 'application/json; charset=utf-8'){
                    if(respuesta.estatus === true){
                        $(box).empty();
                        $('#nombre').val('');
                        $('#correo').val('');
                        $('#telefono').val('');
                        $('#maestria').val('x');
                        $('#mensaje').val('');
                        UIkit.modal.alert('¡Muchas gracias! De ser necesario nos comunicaremos con usted a la mayor brevedad posible.').then(function () {});
                    } else {
                        $(box).html(respuesta.mensaje);
                    }
                } else {
                    $(box).html('Tenemos un inconveniente en este proceso. Por favor vuelve a intentarlo. (1)');
                }
            }
        });
    }
}