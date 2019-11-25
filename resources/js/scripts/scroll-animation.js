export  function scrollAnimate(id){
	try{ $('html,body').animate({ scrollTop:$('#'+id+'').offset().top-100  }, 'slow');
	}
	catch(error){
		window.location.href = 'http://'+window.location.host+'/index#quienes-somos';
	}

}
