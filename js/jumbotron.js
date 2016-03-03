$(document).ready(function() {

	/***********************************************
	 * VARIABLES
	 */

	// CAROUSEL SETTINGS
	var timePerSlide= 5000;						// Time to show per slide in ms (1s = 1000ms)
	var aniSpeed	= "fast";					// Animation speed in ms ("fast", "slow", 200, 500...)

	// JQUERY OBJECTS
	var slides 		= $("#jumbotron .row");		// Array of slides
	var prevBut		= $("#slidePrevButton");	// Previous button
	var nextBut		= $("#slideNextButton");	// Next button
	var slideTimer	= $("#slideTimer");			// Slide timer

	// SLIDER
	var length 		= slides.length;			// Total # of slides
	var current 	= 0;						// Current slide index
	var locked		= false;					// Lockdown while slide animating

	// TIMER
	var timer;			// setInterval() instance
	var startTime;		// Timer start time
	var timeLeft;		// Time left for current slide


	/***********************************************
	 * INITIALIZATIONS
	 */

	// START TIMER
	startTimer();

	// PAUSE ON MOUSE OVER, RESUME ON MOUSE OUT
	slides.hover(function() { pauseTimer(); }, function() { resumeTimer(); });
	prevBut.hover(function() { pauseTimer(); }, function() { resumeTimer(); });
	nextBut.hover(function() { pauseTimer(); }, function() { resumeTimer(); });

	// PREV & NEXT BUTTONS
	prevBut.click(function() { prevSlide(); restartTimer(); });
	nextBut.click(function() { nextSlide(); restartTimer(); });


	/***********************************************
	 * TIMER
	 */

	// PUBLIC FUNCTIONS
	function restartTimer() {
		clearTimer();
		startTimer();
	}
	function startTimer() {
		clearTimer();
		setTimer(timePerSlide);
	}
	function pauseTimer() {
		clearTimer();
		updateTimeLeft();
	}
	function resumeTimer() {
		clearTimer();
		setTimer(timeLeft);
	}

	// SET & CLEAR TIMEOUT
	function setTimer(time) {
		updateStartTime();
		setTimeLeft(time);

		timer = setTimeout(function() {
			nextSlide();
			startTimer();
		}, time);
	}
	function clearTimer() {
		clearTimeout(timer);
	}

	// MISC
	function getTime() {
		return new Date().getTime();
	}
	function setTimeLeft(time) {
		timeLeft = time;
	}
	function updateTimeLeft() {
		timeLeft -= getTime() - startTime;
	}
	function updateStartTime() {
		startTime = getTime();
	}


	/***********************************************
	 * SLIDER
	 */

	// PUBLIC FUNCTIONS
	function prevSlide() {
	 	slideTo(getCurrentSlide(), getPrevSlide());
	}
	function nextSlide() {
		slideTo(getCurrentSlide(), getNextSlide());
	}

	// ANIMATED SLIDING
	function slideTo(hideThis, showThis) {
		if (!locked) {
			lock();
			current = showThis;

			getSlide(hideThis).fadeOut(aniSpeed, function() {
				getSlide(showThis).fadeIn(aniSpeed, function() { unlock(); });
			});
		}
	}

	// GET SLIDE (JQUERY OBJECT)
	function getSlide(slide) {
		return $(slides.get(slide));
	}

	// GET SLIDE INDEXES
	function getCurrentSlide() {
		return current;
	}
	function getPrevSlide() {
		return (current - 1) < 0 ? length - 1 : current - 1;
	}
	function getNextSlide() {
		return (current + 1) > (length - 1) ? 0 : current + 1;
	}

	// LOCK DOWN
	function lock() {
		locked = true;
	}
	function unlock() {
		locked = false;
	}

});