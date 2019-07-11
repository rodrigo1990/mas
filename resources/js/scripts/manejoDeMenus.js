$("#abrirMenu").click(function(){

		$("#xsMenu").removeClass('animated bounceOutRight');
		$("#xsMenu").addClass('animated bounceInRight');


});

$("#cerrarMenu").click(function(){
		$("#xsMenu").removeClass('animated bounceInRight');
		$("#xsMenu").addClass("animated bounceOutRight");


});


$("#xsMenu  li a").click(function(){
	$("#xsMenu").addClass("animated bounceOutRight");
});








