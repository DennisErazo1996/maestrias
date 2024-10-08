let validacion = '#validacion';
let fileOK = false;
let pdfFile = undefined;

(function($){
    $(function(){
        // DOM ready
        $('#postularme').click(function (e) { 
            e.preventDefault();
            formValidation();
        });

        $('#fnac').blur(function (e) { 
            ageCalculator(e);
        });
    });

    // Run immediately
})(jQuery);

function ageCalculator(e){
    let fechaNacimientoString = e.target.value;

    if(fechaNacimientoString !== ''){
        if(fechaNacimientoString !== 'Invalid Date'){
            let fechaNacimiento = new Date(fechaNacimientoString);
            let anioNacimiento = fechaNacimiento.getFullYear();
            let mesNacimiento = fechaNacimiento.getMonth() + 1;
            let diaNacimiento = fechaNacimiento.getDate() + 1;
            
            let fechaActual = new Date();
            let anioActual = fechaActual.getFullYear();
            let mesActual = fechaActual.getMonth() + 1;
            let diaActual = fechaActual.getDate();
            
            let anios = anioActual - anioNacimiento;
            if(mesActual < mesNacimiento){
                anios--;
            } else if(mesActual == mesNacimiento){
                if(diaActual < diaNacimiento){
                    anios--;
                }
            }
            
            $('#edad').val(anios);
        }
    } else {
        $('#fnac').val('');
    }
}


function formValidation(){
    $(validacion).html('');

    let apellido_paterno = $('#apellido_paterno').val();
    let apellido_materno = $('#apellido_materno').val();
    let nombres = $('#nombres').val();
    let identidad = $('#identidad').val();
    let fnac = $('#fnac').val();
    let edad = $('#edad').val();
    let genero = $('#genero').val();
    let pais = $('#pais').val();
    let ciudad = $('#ciudad').val();
    let direccion = $('#direccion').val();
    let telefono = $('#telefono').val();
    let celular = $('#celular').val();
    let correo = $('#correo').val();

    let universidad1 = $('#universidad1').val();
    let lugar1 = $('#lugar1').val();
    let carrera1 = $('#carrera1').val();
    let anio_inicio1 = $('#anio_inicio1').val();
    let anio_termino1 = $('#anio_termino1').val();
    let titulo1 = $('#titulo1').val();
    let universidad2 = $('#universidad2').val();
    let lugar2 = $('#lugar2').val();
    let carrera2 = $('#carrera2').val();
    let anio_inicio2 = $('#anio_inicio2').val() === '' ? 0 : $('#anio_inicio2').val();
    let anio_termino2 = $('#anio_termino2').val() === '' ? 0 : $('#anio_termino2').val();
    let titulo2 = $('#titulo2').val();

    let institucion1 = $('#institucion1').val();
    let localidad1 = $('#localidad1').val();
    let cargo1 = $('#cargo1').val();
    let desde1 = $('#desde1').val() === '' ? 0 : $('#desde1').val();
    let hasta1 = $('#hasta1').val() === '' ? 0 : $('#hasta1').val();
    let institucion2 = $('#institucion2').val();
    let localidad2 = $('#localidad2').val();
    let cargo2 = $('#cargo2').val();
    let desde2 = $('#desde2').val() === '' ? 0 : $('#desde2').val();
    let hasta2 = $('#hasta2').val() === '' ? 0 : $('#hasta2').val();
    let institucion3 = $('#institucion3').val();
    let localidad3 = $('#localidad3').val();
    let cargo3 = $('#cargo3').val();
    let desde3 = $('#desde3').val() === '' ? 0 : $('#desde3').val();
    let hasta3 = $('#hasta3').val() === '' ? 0 : $('#hasta3').val();
    let institucion = $('#institucion').val();
    let cargo = $('#cargo').val();
    let pais_trabajo = $('#pais_trabajo').val();
    let ciudad_trabajo = $('#ciudad_trabajo').val();
    let telefono_trabajo = $('#telefono_trabajo').val();
    let correo_trabajo = $('#correo_trabajo').val();


    let espaniol = $('#espaniol').val();
    let ingles = $('#ingles').val();
    let frances = $('#frances').val();
    let aleman = $('#aleman').val();
    let portugues = $('#portugues').val();
    let otro_idioma = $('#otro_idioma').val();
    let nivel_otro_idioma = $('#nivel_otro_idioma').val();
    let fuente = $('input[name=fuente]:checked').val();
    let p1 = $('#p1').val();
    

    if(!checkName(apellido_paterno)){
        showValidationMsj('#apellido_paterno', validacion, 'Escriba su apellido paterno');
    } /*else if(!checkName(apellido_materno)){
        showValidationMsj('#apellido_materno', validacion, 'Escriba su apellido materno');
    } else if(!checkName(nombres)){
        showValidationMsj('#nombres', validacion, 'Escriba su nombre');
    } else if(!checkString(identidad)){
        showValidationMsj('#identidad', validacion, 'Escriba su identidad');
    } else if(!checkString(fnac)){
        showValidationMsj('#fnac', validacion, 'Seleccione su fecha de nacimiento');
    } else if(!checkNumber(edad)){
        showValidationMsj('#edad', validacion, 'Escriba su edad actual');
    } else if(!checkSelect(genero)){
        showValidationMsj('#genero', validacion, 'Seleccione su género');
    } else if(!checkString(pais)){
        showValidationMsj('#pais', validacion, 'Escriba su país de procedencia');
    } else if(!checkString(ciudad)){
        showValidationMsj('#ciudad', validacion, 'Escriba su ciudad de procedencia');
    } else if(!checkString(direccion)){
        showValidationMsj('#direccion', validacion, 'Escriba su direccion de residencia');
    } else if(!checkString(telefono)){
        showValidationMsj('#telefono', validacion, 'Escriba su número de teléfono');
    } else if(!checkString(celular)){
        showValidationMsj('#celular', validacion, 'Escriba su número de celular');
    } else if(!checkEmail(correo)){
        showValidationMsj('#correo', validacion, 'Escriba su correo electrónico');
    } else if(!checkString(universidad1)){
        showValidationMsj('#universidad1', validacion, 'Escriba el nombre de su universidad');
    } else if(!checkString(lugar1)){
        showValidationMsj('#lugar1', validacion, 'Escriba el nombre del lugar en donde se encuentra su universidad');
    } else if(!checkString(carrera1)){
        showValidationMsj('#carrera1', validacion, 'Escriba el nombre su carrera universitaria');
    } else if(!checkNumber(anio_inicio1)){
        showValidationMsj('#anio_inicio1', validacion, 'Escriba el año en que inició su carrera universitaria');
    } else if(!checkNumber(anio_termino1)){
        showValidationMsj('#anio_termino1', validacion, 'Escriba el año en que terminó su carrera universitaria');
    } else if(!checkString(titulo1)){
        showValidationMsj('#titulo1', validacion, 'Escriba el título obtenido en su carrera universitaria');
    } else if(espaniol === 'No' && ingles === 'No' && frances === 'No' && aleman === 'No' && portugues === 'No' && otro_idioma === 'No'){
        showValidationMsj('#espaniol', validacion, 'Seleccione al menos un idioma');
    } else if(fuente === undefined){
        showValidationMsj('input[name=fuente]', validacion, 'Seleccione la fuente de financiamiento');
    } else if(!checkString(p1)){
        showValidationMsj('#p1', validacion, 'Escriba por qué ha decidido estudiar la Maestría en Ciencias Agroalimentarias');
    }*/ else {
        let data = new FormData();
        data.append('apellido_paterno', apellido_paterno);
        data.append('apellido_materno', apellido_materno);
        data.append('nombres', nombres);
        data.append('identidad', identidad);
        data.append('fnac', fnac);
        data.append('edad', edad);
        data.append('genero', genero);
        data.append('pais', pais);
        data.append('ciudad', ciudad);
        data.append('direccion', direccion);
        data.append('telefono', telefono);
        data.append('celular', celular);
        data.append('correo', correo);
        data.append('universidad1', universidad1);
        data.append('lugar1', lugar1);
        data.append('carrera1', carrera1);
        data.append('anio_inicio1', anio_inicio1);
        data.append('anio_termino1', anio_termino1);
        data.append('titulo1', titulo1);
        data.append('universidad2', universidad2);
        data.append('lugar2', lugar2);
        data.append('carrera2', carrera2);
        data.append('anio_inicio2', anio_inicio2);
        data.append('anio_termino2', anio_termino2);
        data.append('titulo2', titulo2);
        data.append('institucion1', institucion1);
        data.append('localidad1', localidad1);
        data.append('cargo1', cargo1);
        data.append('desde1', desde1);
        data.append('hasta1', hasta1);
        data.append('institucion2', institucion2);
        data.append('localidad2', localidad2);
        data.append('cargo2', cargo2);
        data.append('desde2', desde2);
        data.append('hasta2', hasta2);
        data.append('institucion3', institucion3);
        data.append('localidad3', localidad3);
        data.append('cargo3', cargo3);
        data.append('desde3', desde3);
        data.append('hasta3', hasta3);
        data.append('institucion', institucion);
        data.append('cargo', cargo);
        data.append('pais_trabajo', pais_trabajo);
        data.append('ciudad_trabajo', ciudad_trabajo);
        data.append('telefono_trabajo', telefono_trabajo);
        data.append('correo_trabajo', correo_trabajo);
        data.append('espaniol', espaniol);
        data.append('ingles', ingles);
        data.append('frances', frances);
        data.append('aleman', aleman);
        data.append('portugues', portugues);
        data.append('otro_idioma', otro_idioma);
        data.append('nivel_otro_idioma', nivel_otro_idioma);
        data.append('fuente', fuente);
        data.append('p1', p1);

        $.ajax({
			url:'process/mgpas-postulacion',
			data:data,
			type:"POST",
			processData: false,
    		contentType: false,
			beforeSend: function(){
				$(validacion).html('<div data-uk-spinner class="texto-verde"></div>');
			},
			success: function(respuesta, status, xhr){
				if(respuesta.estatus){
					UIkit.modal.alert('¡Proceso correcto!').then(() => window.location.reload());
				}
				else{
					$(validacion).html(respuesta.mensaje);
				}				
			},
			error: function(){
				$(validacion).html('Tenemos un inconveniente en este proceso. Por favor vuelve a intentarlo.');
			}
		});
    }
}