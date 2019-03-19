function mostrarPanelUsuario() {
	$("a[id='ocultarPanel']").remove();
	$("div[class='formularioCliente']").attr("style","visibility: visible");			
	var botonInsertar = $("a[onclick='mostrarPanelUsuario()']");
	botonInsertar.before($('<a>', {	id: 'ocultarPanel',
									class: 'buttonLinks',
									style: 'float: right; margin-right: 10px; cursor: pointer;',
									onclick: 'esconderPanelUsuario()',
									text: 'Ocultar Panel'}));
}

function esconderPanelUsuario() {
	$("a[id='ocultarPanel']").remove();
	$("div[class='formularioCliente']").attr("style","visibility: hidden");				
}	

function checkRow(element) {
	$("div[id='detallesUsuario']").attr("style","visibility: visible");
}

function checkFactura() {
	var archivo = $("input[x='factura']").val();
	var tipo = archivo.substr(-4);
	if (tipo==".pdf") {
		return true;
	}else if (tipo!=".pdf") {
		$("p[name='error']").text("Solo puedes subir archivos .pdf");
		return false;
	}
}

function checkAlbaran() {
	var archivo = $("input[x='albaran']").val();
	var tipo = archivo.substr(-4);
	if (tipo==".pdf") {
		return true;
	}else if (tipo!=".pdf") {
		$("p[name='error']").text("Solo puedes subir archivos .pdf");
		return false;
	}
}

function checkPresupuesto() {
	var archivo = $("input[x='presupuesto']").val();
	var tipo = archivo.substr(-4);
	if (tipo==".pdf") {
		return true;
	}else if (tipo!=".pdf") {
		$("p[name='error']").text("Solo puedes subir archivos .pdf");
		return false;
	}
}

function checkDocX() {
	var archivo = $("input[x='docX']").val();
	var tipo = archivo.substr(-4);
	if (tipo==".pdf") {
		return true;
	}else if (tipo!=".pdf") {
		$("p[name='error']").text("Solo puedes subir archivos .pdf");
		return false;
	}
}

function checkDocY() {
	var archivo = $("input[x='docY']").val();
	var tipo = archivo.substr(-4);
	if (tipo==".pdf") {
		return true;
	}else if (tipo!=".pdf") {
		$("p[name='error']").text("Solo puedes subir archivos .pdf");
		return false;
	}
}

function isDni(dni) {

    var dni = $("form[action='/create']").find("input[name='dni']");
    var reg = /^\d{8}[a-zA-Z]$/;

    if (reg.test($(dni).val())) {
        return true;
    } else {
        errorDisplay("<b>El campo DNI es incorrecto</b>");
        return false;
    }
}

function isPhoneOK(phone) {

    var inputPhone = $("input[name='phone']");
    var reg = /^\d{9}$/;

    if (inputPhone.val().length != 9) {
        errorDisplay("<b>El teléfono introducido es incorrecto</b>");
        return false;
    } else if (reg.test($(phone).val())) {
        return true;
    } else {
        errorDisplay("<b>El teléfono introducido es incorrecto</b>");
        return false;
    }
}

function isMailOk(mail) {

    var inputMail = $("input[name='mail']");
    var reg = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

    if (reg.test($(mail).val())) {
        return true;
    } else {
        errorDisplay("<b>Correo electrónico incorrecto</b>");
        return false;
    }

}

function checkEmptyFields() {
	
	var inputFields = $("form[action='/create']").find('input[type="text"],input[type="email"]');   
    var inputDNI = $("input[name='dni']");
    var inputPhone = $("input[name='phone']");
    var inputMail = $("input[name='mail']");
    var statusCheck;

	inputFields.each(function() {
		
		if($(this).val().length == 0) {
      		errorDisplay("<b>Revisa los campos vacíos</b>");
      		statusCheck = false;
    	} else if (isDni(inputDNI) == false) {
            statusCheck = false;
        } else if (isPhoneOK(inputPhone) == false) {
            statusCheck = false;
        } else if (isMailOk(inputMail) == false) {
            statusCheck = false;
        }
	});
    return statusCheck;
}