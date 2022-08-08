// JavaScript Document

var hayError = false;
var $;

jQuery(document).ready(function(e){
	$ = e;
	
	// Limpia validación
	$("input, select, textarea").change(function(e) {
        if(hayError === true){
			if(e.target.id === ""){
				$(".validacion").html("");
				hayError = false;
			}
			else{
				quitaError(e.target.id);
			}
		}
    });
	$("input, textarea").keyup(function(e) {
        if(hayError === true){
			if(e.target.id === ""){
				$(".validacion").html("");
				hayError = false;
			}
			else{
				quitaError(e.target.id);
			}
		}
    });
	
});

// Pone mensaje de validación
function showValidationMsj(input,box,msj){
	$(input).addClass('uk-form-danger');
	$(box).html(msj);
	hayError = true;
}

// Chequea formato tel
function checkTel(tel){
	var patronTel =/^[0-9]{8}$/;
	var result = true;

	if(!patronTel.test(tel)){
		result = false;
	}
	return result;
}

// Chequea formato correo
function checkEmail(email){
	var patronCorreo = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/;
	var result = true;

	if(!patronCorreo.test(email)){
		result = false;
	}
	return result;
}

// Chequea formato de nombres personales
function checkName(name){
	var patronNombres = /^[a-zA-ZñÑáéíóúüÁÉÍÓÚÜ ']{3,50}$/;
	var result = true;

	if(!patronNombres.test(name)){
		result = false;
	}
	return result;
}

// Chequea formato de apodos
function checkApodo(apodo){
	var patronApodos = /^[a-zA-Z-0123456789]{4,20}$/;
	var result = true;

	if(!patronApodos.test(apodo)){
		result = false;
	}
	return result;
}

// Chequea formato de nombres personales
function checkClave(clave){
	var patronClave = /(?=^.{8,16}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
	var result = true;

	if(!patronClave.test(clave)){
		result = false;
	}
	return result;
}

// Chequea formato de cadenas
function checkString(string){
	var result = true;

	if(string === null || string.length === 0 || /^\s+$/.test(string)){
		result = false;
	}
	return result;
}

// Chequea formato de números
function checkNumber(num){
	var result = true;

	if(num === null || num.length === 0 || /^\s+$/.test(num)){
		result = false;
	}
	else{
		if(isNaN(num)){
			result = false;
		}
	}
	return result;
}

// Chequea valor se selects
function checkSelect(val){
	'use strict';
	var result = true;

	if(val === 'x' || val === null || val === undefined){
		result = false;
	}
	return result;
}

// Quita error de validación
function quitaError(x){
	$("#"+x+"").removeClass('uk-form-danger');
	$(".validacion").html("");
	hayError = false;
}
