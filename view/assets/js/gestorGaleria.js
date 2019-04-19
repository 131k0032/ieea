/*================================================
=            Subir multiples imagenes            =
================================================*/

// Controlando que la imagen no se arrastre en el body al arrastre
$("body").on("dragover",function(e){
	e.preventDefault();
	e.stopPropagation();
});


// Al arrastre de la imagen en esta area, cambie de fondo
$("#lightbox").on("dragover",function(e){
	e.preventDefault();
	e.stopPropagation();
	$("#lightbox").css({"background":"url(view/assets/img/pattern.jpg)"})
});

/*=====  End of Subir multiples imagenes  ======*/




/*========================================
=            Soltar la imagen            =
========================================*/
// Controlando que la imagen no se arrastre en el body al soltar la imagen
$("body").on("drop",function(e){
	e.preventDefault();
	e.stopPropagation();
});



var imagenSize = [];//Tamaño del archivo
var imagenType = [];//Tipo de archivo

// Al soltar la imagen, deje el fondo blanco
$("#lightbox").on("drop",function(e){
	e.preventDefault();
	e.stopPropagation();
	$("#lightbox").css({"background":"white"})

	// Recuperando las imagenes que se arrastren	
	archivo = e.originalEvent.dataTransfer.files;
	 // console.log('archivo',archivo);

	// Recorriendo los archivos que se suban
	// Su puta madre tanto pedo porque no era lenght sino length vale kaka :V
	for(var i = 0 ; i < archivo.length ; i++){
		imagen = archivo[i];
		imagenSize.push(imagen.size);
		// Ver contenido de variables en consola
		  //console.log('imagenSize',imagenSize);
		imagenType.push(imagen.type);
		// Ver contenido de variables en consola
		// console.log('imagenType',imagenType);

			// Si supera los 2 mb
			if(Number(imagenSize[i]) > 2000000){

			$("#lightbox").before('<div class="alert alert-warning alerta text-center">El archivo excede el peso permitido, 2mb</div>')

			}else{
				$(".alerta").remove();			
			}
			// Si no es imagen
			if(imagenType[i] == "image/jpeg" || imagenType[i] == "image/png"){
				$(".alerta").remove();		
			}else{
				$("#lightbox").before('<div class="alert alert-warning alerta text-center">El archivo debe ser formato JPG o PNG</div>')

			}


			// Enviando imagenes a ajax
			if(Number(imagenSize[i]) < 2000000 && imagenType[i] == "image/jpeg" || imagenType[i] == "image/png"){

				var datos = new FormData(); //variable datos
				datos.append("imagen",imagen); //Este se recupera de imagen = archivo[i]; y se envía por post entre comillas "imagen"
				$.ajax({					
					url:"view/ajax/gestorGaleria.php",// Busca este url
					method : "POST", //usa el metodo post
					data : datos,
					cache : false,
					contentType : false,
					processData : false,

					// Antes de enviar
					beforeSend : function(){
						// Muestra el gif por cada elemento arrastrado
						$("#lightbox").append('<li id="status"><img src="view/assets/img/status.gif"></li>');// añadir o insertar contenido al final del elemento seleccionado


					},
					// Exitoso usa la variable respuesta
					success : function(respuesta){
						// Quita el id status
						$("#status").remove();
						console.log('respuesta',respuesta);

					}


				})

			}else{

			}

			
	}

});

/*=====  End of Soltar la imagen  ======*/
