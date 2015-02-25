$(function(){

	$("#closeYoutubePlayer").click(function (){
		$(".youtube").hide();
	});

	$("#showYoutubePlayer").click(function (){
		$(".youtube").show();
	})

	$("#explorar").click(function(){
		window.location = "./encuesta.html";
	});

});