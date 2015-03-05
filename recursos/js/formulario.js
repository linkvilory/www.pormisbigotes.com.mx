/*
 * Archivo de ejecucón y validación del formulario de la página web
 */

	/*
	 * Ajax Formulario
	 */
	$("#enviarFormulario").submit(function(e){
		e.preventDefault();
		/*
		 * Obtener todos los valores del formulario
		 */
		$(".formAjax").hide();
		$(".loading").show();

		var respuestaUno = "";
		var respuestaDos = "";
		var respuestaTres = "";
		$( ".grupoUno" ).each(function( index ) {
			var obj = $(this);
			if(obj.hasClass("selected")){
				respuestaUno = obj.val();
			}
		});
		$( ".grupoDos" ).each(function( index ) {
			var obj = $(this);
			if(obj.hasClass("selected")){
				respuestaDos = obj.val();
			}
		});
		$( ".grupoTres" ).each(function( index ) {
			var obj = $(this);
			if(obj.hasClass("selected")){
				respuestaTres = obj.val();
			}
		});
		if(respuestaUno == "" || respuestaDos == "" || respuestaTres == ""){
			$(".formAjax").show();
			$(".loading").hide();
			alert("Debes seleccionar una respuesta para las preguntas.");
			return;
		}
		$.ajax({
			type: "POST",
			url: "send.php",
			data: { 
				respuestaUno: respuestaUno,
				respuestaDos: respuestaDos,
				respuestaTres: respuestaTres
			}
		})
		.done(function( msg ) {
			$(".formAjax").show();
			$(".loading").hide();
			alert( "Gracias por sus comentarios!");
			window.location = "./inicio.html";
		});
		
	});
	/*
	 * Seleccionar solo el boton del grupo seleccionado y deseleccionar los demas
	 */
	 $(".grupoUno").click(function(){
	 	$( ".grupoUno" ).each(function( index ) {
			$(this).removeClass("selected");
		});
	 	$(this).toggleClass("selected");
	 });
	 $(".grupoDos").click(function(){
	 	$( ".grupoDos" ).each(function( index ) {
			$(this).removeClass("selected");
		});
	 	$(this).toggleClass("selected");
	 });
	 $(".grupoTres").click(function(){
	 	$( ".grupoTres" ).each(function( index ) {
			$(this).removeClass("selected");
		});
	 	$(this).toggleClass("selected");
	 });