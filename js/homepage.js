$(document).ready(function() {

	/***********************************************
	 * CONFIGURATION
	 */

	// GENERAL
	var showSeconds	= 10;							// Time to show per slide in seconds
	var aniSpeed	= "slow";						// Animation speed in ms ("fast", "slow", 200, 500...)
	var timerColor	= "rgba(255, 255, 255, 0.8)";	// Color of the pie timer
	var timerWidth	= 40;							// Width of pie timer in px

	// JQUERY OBJECTS
	var slides 		= $("#jumbotron .row");			// Array of slides
	var prevBut		= $("#slidePrevButton");		// Previous button
	var nextBut		= $("#slideNextButton");		// Next button
	var slideTimer	= $("#slideTimer");				// Slide timer

	// DONT TOUCH THESE VARIABLES
	var length 		= slides.length;				// Total # of slides
	var current 	= 0;							// Current slide index
	var locked		= false;						// Lockdown while slide animating


	/***********************************************
	 * EVENT HANDLERS
	 */

	// Set & Start timer
	restartTimer();

	// Pause timer onmouseover, Resume onmouseout
	slides.hover(function() { pauseTimer(); }, function() { startTimer(); });
	prevBut.hover(function() { pauseTimer(); }, function() { startTimer(); });
	nextBut.hover(function() { pauseTimer(); }, function() { startTimer(); });

	// Previous & Next Slide Buttons
	prevBut.click(function() { prevSlide(); restartTimer(); });
	nextBut.click(function() { nextSlide(); restartTimer(); });


	/***********************************************
	 * PIE TIMER
	 */

	function setTimer() {
		slideTimer.pietimer({
			seconds: showSeconds,
			color: timerColor,
			height: timerWidth,
			width: timerWidth,
			is_reversed: true
		}, function() {
			nextSlide();
			setTimer();
			startTimer();
		});
	}

	function startTimer() {
		slideTimer.pietimer('start');
	}

	function pauseTimer() {
		slideTimer.pietimer('pause');
	}

	function restartTimer() {
		setTimer();
		startTimer();
	}


	/***********************************************
	 * SLIDERS
	 */

	function slideTo(hideThis, showThis) {
		if (!locked) {
			lock();
			
			hideThis.fadeOut(aniSpeed, function() {
				showThis.fadeIn(aniSpeed, unlock());
			});
		}
	}

	function prevSlide() {
	 	slideTo(getCurrentSlide(), getPrevSlide());
	}

	function nextSlide() {
		slideTo(getCurrentSlide(), getNextSlide());
	}


	/***********************************************
	 * GET SLIDE OBJECTS
	 */

	function getCurrentSlide() {
		return $(slides.get(current));
	}

	function getPrevSlide() {
		//Decrement, reset if necessary
		if (--current < 0)
			current = length - 1;

		return getCurrentSlide();
	}

	function getNextSlide() {
		//Increment, reset if necessary
		if (++current > length - 1)
			current = 0;

		return getCurrentSlide();
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