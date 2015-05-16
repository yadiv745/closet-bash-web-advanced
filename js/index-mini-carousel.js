(function($) {
	$.fn.carouselmini = function(options) {
		var settings = {
			previous: '#carouselmini-prev',
			next: '#carouselmini-next',
			speed: 600
		};
		options = $.extend(settings, options);

		return this.each(function() {

		    // 1. Setup

			var $element = $(this),
				$wrapper = $('ul', $element), // items wrapper
				$items = $('li', $wrapper), // carousel items
				$outerWrapper = $wrapper.parent(), // outer items wrapper
				outerWrapperWidth = $outerWrapper.outerWidth(), // the visible portion of the carousel
				itemsNumber = $items.length, // items total number
				singleItemWidth = $items.eq(0).outerWidth(), // single item width
				singleItemMarginWidth = 16 * 15, // left/right margins set in the CSS styles
				visiblePages = Math.ceil(outerWrapperWidth / singleItemWidth), // visible pages
				pageNumber = Math.ceil(itemsNumber / visiblePages), // number of pages
				index = 0; // to keep track of the page number

			    // set the overall width of the wrapper

			    $wrapper.width((singleItemWidth + singleItemMarginWidth) * itemsNumber);

			// 2. Run the carousel

			$(options.previous).on('click', function(e) {
				e.preventDefault();
				index--; // decrement the counter
				if(index >= 0) {
					$wrapper.animate({
						left: '+=' + (singleItemWidth + singleItemMarginWidth)
					}, options.speed);
        }


			});

			$(options.next).on('click', function(e) {
				e.preventDefault();
				index++; // increment the counter
				if(index <= pageNumber) {
					$wrapper.animate({
						left: '-=' + (singleItemWidth + singleItemMarginWidth)
					}, options.speed);
        }
			});



		});


	};

})(jQuery);

$(function() {
	$('#carouselmini').carouselmini();
});
