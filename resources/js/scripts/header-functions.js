$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();

    if(scroll==0){
    	$("header").removeClass("animated slideInDown");
        $("header").removeClass("addBkground");
        $("header").removeClass("removeBkground");
        $("header .logo-btn img").attr('src','img/logo-white.svg');

        /*$(".xs-row").removeClass("addBkground");

        $("header").addClass("removeBkground");

        $(".xs-row").addClass("removeBkground");
    
        $("header .logo").attr('src','img/logo-white.png');*/
        

    }else{

        $("header .logo-btn img").attr('src','img/logo-blue.svg');

        //$(".xs-row").removeClass("removeBkground");

        $("header").addClass("animated slideInDown");

        $("header").addClass("addBkground");

        //$("header .logo").attr('src','img/logo.png');
        
        
    }
    // Do something
});