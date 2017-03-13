    jQuery(document).ready(function($) {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        $('#social__stick').scrollToFixed();
     //    $('.your-class2').slick({
     //    	  arrows:false,
			  // infinite: true,
			  // speed: 600,
			  // slidesToShow: 1,
			  // autoplay: false,
			  // fade: true,
  			//   cssEase: 'linear',
     //  	});


        // Dock the footer to the bottom of the page, but scroll up to reveal more
        // content if the page is scrolled far enough.

        $('.footer').scrollToFixed( {
            bottom: 0,
            limit: $('.footer').offset().top
        });


        // Dock each summary as it arrives just below the docked header, pushing the
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    });