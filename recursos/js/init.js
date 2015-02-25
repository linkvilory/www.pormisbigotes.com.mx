$(function(){

	$("#closeYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen").hide();
	});

	$("#showYoutubePlayer").click(function (){
		$(".container-fluid.fullscreen").show();
	})

	$("#explorar").click(function(){
		window.location = "./encuesta.html";
	});

});