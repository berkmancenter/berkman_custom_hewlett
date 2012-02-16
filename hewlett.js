jQuery(document).ready(function(){

	if(jQuery('body.home').length > 0){
		// This URL works only on the homepage. Need a better pattern if we're going to use this elsewhere on the site.
		jQuery.ajax({
			type: 'GET',
			cache: false,
			url: 'speakers/',
			success: function(html){
				var interiorHTML = jQuery(html).find('ul.participants-items').html();
				jQuery('ul.xoxo').prepend('<aside class="widget-container"><ul class="slideshow">' + interiorHTML + '</ul></aside>').find('ul.slideshow').cycle({fx: 'scrollUp'});
			},
			complete: function(){
				jQuery('ul.slideshow a').attr('href','/speakers/');
			}
		});
	}
       
        jQuery('.mid-slideshow').cycle({
                fx: 'scrollHorz' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        });


	jQuery('#site-title').bind({
		click: function(){
			//TODO: fix this when we start working under the "real" domain.
			window.location.href = '/';
		},
		mouseover: function(){
			jQuery(this).css({cursor: 'pointer'});
		}
	});
	
	if(jQuery('.page-id-430').length > 0){

		jQuery('.filters img').hide();
		jQuery('.filters a').click(function(e){
			if(jQuery(this).attr('title').length > 0){
				jQuery('.filters img').show();
				e.preventDefault();
				var desiredStuff = jQuery(this).attr('title');
				jQuery('.archive-item:not(' + desiredStuff + ')').hide('slow');
				jQuery('.archive-item' + desiredStuff).show('slow', function(){jQuery('.filters img').hide()});
			}
		});
	}
        $(function() { var $container = $('.masonry-container'); $container.imagesLoaded(function(){ $container.masonry({ itemSelector : '.masonry-item', columnWidth : 241 }); }); });
});
