
/*
* hoverFlow - A Solution to Animation Queue Buildup in jQuery
* Version 1.00
*
* Copyright (c) 2009 Ralf Stoltze, http://www.2meter3.de/code/hoverFlow/
*/
(function( $ ){

	$.fn.hoverFlow = function(type, prop, speed, easing, callback) {
		// only allow hover events
		if ($.inArray(type, ['mouseover', 'mouseenter', 'mouseout', 'mouseleave']) == -1) {
			return this;
		}

		// build animation options object from arguments
		// based on internal speed function from jQuery core
		var opt = typeof speed === 'object' ? speed : {
			complete: callback || !callback && easing || $.isFunction(speed) && speed,
			duration: speed,
			easing: callback && easing || easing && !$.isFunction(easing) && easing
		};

		// run immediately
		opt.queue = false;

		// wrap original callback and add dequeue
		var origCallback = opt.complete;
		opt.complete = function() {
			// execute next function in queue
			$(this).dequeue();
			// execute original callback
			if ($.isFunction(origCallback)) {
				origCallback.call(this);
			}
		};

		// keep the chain intact
		return this.each(function() {
			var $this = $(this);

			// set flag when mouse is over element
			if (type == 'mouseover' || type == 'mouseenter') {
				$this.data('jQuery.hoverFlow', true);
			} else {
				$this.removeData('jQuery.hoverFlow');
			}

			// enqueue function
			$this.queue(function() {
				// check mouse position at runtime
				var condition = (type == 'mouseover' || type == 'mouseenter') ?
					// read: true if mouse is over element
					$this.data('jQuery.hoverFlow') !== undefined :
					// read: true if mouse is _not_ over element
					$this.data('jQuery.hoverFlow') === undefined;

				// only execute animation if condition is met, which is:
				// - only run mouseover animation if mouse _is_ currently over the element
				// - only run mouseout animation if the mouse is currently _not_ over the element
				if(condition) {
					$this.animate(prop, opt);
				// else, clear queue, since there's nothing more to do
				} else {
					$this.queue([]);
				}
			});

		});
	};

})( jQuery );



/*
$( document ).ready(function() {

  $( ".main-nav .icon a" ).click(function() {
  	 $( ".main-nav" ).toggleClass("responsive");
  });
});

*/


/*
* Function to animate image thumbnail arrows on hover
*/
$.fn.hoverThumb = function() {

	// only animate for large desktop browsers
  	if($(window).width() >= 1140){

	  	this.mouseenter(function(e){

			$(this).find('.fa-angle-right').hoverFlow(e.type, {opacity:1, right:15}, 500);
			//$(this).hoverFlow(e.type, {opacity:1}, 300).siblings().hoverFlow(e.type, {opacity:0.3}, 300);
			$(this).stop().animate({'opacity':'1'}, 300).siblings().stop().animate({'opacity':'0.4'}, 500);

		}).mouseleave(function(e){

			$(this).find('.fa-angle-right').hoverFlow(e.type, {opacity:0, right:0}, 500);

		});

		// once the mouse leaves the whole thumbs div
		$('.portfolio-thumbs').mouseleave(function(e){

			// we reset the thumbs
			$('.portfolio-thumbs').stop().animate({'opacity':'1'}, 500);

		});

	}
};

/*
* Function to bring in portfolio gallery items one by one
*/
$.fn.animateGallery = function() {

	$(this).each(function(i){
		$(this).delay(i * 150).animate({'opacity':'1'}, 300, 'easeOutExpo');
	});
};

/*
* Function to animate content details
*/
function animateContent() {

	// show the rest of the content
	$('.latest-work').css({'opacity':'0', 'top':'50px'}).stop().animate({'opacity':'1', 'top':'0px'}, 500, 'easeOutExpo');
	//$('#footer').css({'opacity':'0', 'top':'50px'}).stop().animate({'opacity':'1', 'top':'0px'}, 500, 'easeOutExpo');
};
