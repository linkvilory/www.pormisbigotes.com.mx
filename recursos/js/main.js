$(function(){

	$("#closeYoutubePlayer").click(function (){
		$(".youtube").hide();
	});

	$("#showYoutubePlayer").click(function (){
		$(".youtube").show();
	})

	/*
	 * Toogle Menu
	 */

	 $("#toogleMenu").click(function(){
	 	$("#menu").toggleClass("hide");
	 });

	/*
	 * Ajax Formulario
	 */
	$("#enviarFormulario").submit(function(e){
		e.preventDefault();

		/*
		 * Obtener todos los valores del formulario
		 */

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
			alert( "Gracias por sus comentarios!");
			window.location = "./inicio.html"
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

});