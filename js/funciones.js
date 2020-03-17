$("#buscar").click(function(){ 
	var datos = {
		cognome: $("#cognome").val(),
		nome: $("#nome").val()
	}
	
	$.ajax({
		method: "POST",
		url: "./js/get_datos_italia.php",
		data: datos,
		success: function(result){
			if ($.isNumeric(result)) {
				alert("Se encontó más de un resultado")
			}else{
				let datos = result.split(",");
				$("#cognome").val(datos[0]);
				$("#nome").val(datos[1]);
				$("#data_di_nascita").val(datos[2]);
				$("#localita").val(datos[3]);
				$("#nazione").val(datos[4]);
				$("#cittadinanza").val(datos[5]);
				$("#numero_tessera").val(datos[6]);
				$("#anno_iscrizione_circolo").val(datos[7]);
				$("#tipo_socio").val(datos[8]);
				$("#indirizzo").val(datos[9]);
				$("#cap").val(datos[10]);
				$("#citta").val(datos[11]);
				$("#professione").val(datos[12]);
				$("#stato").val(datos[13]);
				$("#email").val(datos[14]);
				$("#telefono").val(datos[15]);
				$("#firma").val(datos[16]);
				$("#id").val(datos[17]);
			}
		}
	});

	// 	$.ajax({
	// 		url: "./js/get_datos_italia.php",
	// 		success: function(result){
	// 			console.log(result);
	// 		}
	// 	});

});