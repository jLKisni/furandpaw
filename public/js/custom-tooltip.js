$(document).ready(function(){

	$('.isotype_filters a').mouseover(function(){

			$(this).find('.data-count').slideToggle('fast');

		$('.isotype_filters a').mouseout(function(){

			$(this).find('.data-count').slideUp('fast');
		});
	});


    $('.thumbnails img').elevateZoom({
        zoomWindowWidth:500,
        zoomWindowHeight:400
    });

    $('.item img').elevateZoom({
        easing : true
    });



	


}); // ready the pages when load

