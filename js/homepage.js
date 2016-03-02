$(document).ready(function() {

	var slides 	= $("#jumbotron .row");	// Array of slides
	var length 	= slides.length;		// Total # of slides
	var current = 0;					// Current slide index
	var locked	= false;				// Lockdown while slide animating

	/***********************************************
	 * EVENT HANDLERS
	 */

	$("#prevSlide").click(function() {
		if (!locked) {
			lock();

			getSlide().fadeOut("slow", function() {
				prevSlide().fadeIn("slow", unlock());
			});
		}
	});

	$("#nextSlide").click(function() {
		if (!locked) {
			lock();
			
			getSlide().fadeOut("slow", function() {
				nextSlide().fadeIn("slow", unlock());
			});
		}
	});

	/***********************************************
	 * GET SLIDES
	 */

	function getSlide() {
		return $(slides.get(current));
	}

	function prevSlide() {
		//Decrement, reset if necessary
		if (--current < 0)
			current = length - 1;

		return getSlide();
	}

	function nextSlide() {
		//Increment, reset if necessary
		if (++current > length - 1)
			current = 0;

		return getSlide();
	}

	/***********************************************
	 * LOCK DOWN
	 */
	function lock() {
		locked = true;
	}

	function unlock() {
		locked = false;
	}

});