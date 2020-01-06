$(document).ready(function(){
	if ($('.banner').length > 1) {
        var banner = $('.bxslider').bxSlider({
            auto: true,
            infiniteLoop: true,
            autoDirection: 'next',
            pause: 3000,
            onSlideAfter: function() {
                banner.startAuto();
            }
        });      
    } else {
    	$('.bxslider').bxSlider({
            auto: false,
            controls: false,
            pager: false 
        });
    }
})
