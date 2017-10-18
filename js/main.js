$(document).ready(function(){
	window.setTimeout(function(){
		$('.logo-unpad-ss').addClass('slide-right')
		// $('.logo-unpad-ss').addClass('animated infinite pulse')
	}, 500);
	window.setTimeout(function(){
		$('.title-ss').addClass('show');
	}, 500);
	window.setTimeout(function(){
		$('.title-ss').addClass('visible');
	}, 1500);
	window.setTimeout(function(){
		$('.title-ss').addClass('animated infinite pulse');
	}, 1500);

	$('.add-btn').click(function(){
		$('.add-btn-popup-box').addClass("show");
		window.setTimeout(function(){
			$('.add-btn-popup-box').addClass('visible');
		}, 0);
		$('.white-smoke').addClass("show");
		window.setTimeout(function(){
			$('.white-smoke').addClass('visible');
		}, 0);

	});
	$('.white-smoke').click(function(){
		$('.white-smoke').removeClass("visible");
		window.setTimeout(function(){
			$('.white-smoke').removeClass('show');
		}, 100);
		$('.add-btn-popup-box').removeClass("visible");
		window.setTimeout(function(){
			$('.add-btn-popup-box').removeClass('show');
		}, 200);
	});

	$('.main-menu-btn').click(function(){
		$('.main-menu').toggleClass("show");
		window.setTimeout(function(){
			$('.main-menu').toggleClass('slide');
		}, 0);
	});

	$('.smoke').click(function(){ //exit main menu by click on smoke
        $('.main-menu').removeClass('slide')

        window.setTimeout(function(){
            $(".main-menu").removeClass("show")
        },100);
    });
	
	
	//optional
	// $('.app-title').addClass('animated slideInRight')
	// $('.logo-unpad').addClass('animated fadeIn')

	// window.setTimeout(function(){
	// }, 500);
		// $('.logo-unpad-ss').addClass('animated infinite pulse')
})