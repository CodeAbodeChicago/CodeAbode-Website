// timeline.js
// interactive timeline on the apply page


// DOM ELEMENTS
// timeline elements
var apply = document.querySelector("#apply");
var applyActive = document.querySelector("#apply-active");
var instructorCall = document.querySelector("#instructor-call");
var instructorCallActive = document.querySelector("#instructor-call-active");
var reserveSeat = document.querySelector("#reserve-seat");
var reserveSeatActive = document.querySelector("#reserve-seat-active");
var firstDay = document.querySelector("#first-day");
var firstDayActive = document.querySelector("#first-day-active");
// timeline info paragraph
var timelineInfo = document.querySelector("#timeline-info");

// INITIAL SETUP
// set 'active' elements to hidden when page loads
displayInfo("apply");
apply.style.visibility = "hidden"; // apply is active by default
instructorCallActive.style.visibility = "hidden";
reserveSeatActive.style.visibility = "hidden";
firstDayActive.style.visibility = "hidden";

// boolean variables to determine if a step is active or not
var applyIsOn = true; // apply is active by default
var callIsOn = false;
var reserveIsOn = false;
var firstIsOn = false;


// BIND EVENTS
// apply
apply.onclick = function() {
	handleTimeline(this.id);
	displayInfo(this.id);
}
// instructor call
instructorCall.onclick = function() {
	handleTimeline(this.id);
	displayInfo(this.id);
}
// reserve seat
reserveSeat.onclick = function() {
	handleTimeline(this.id);
	displayInfo(this.id);
}
// first day
firstDay.onclick = function() {
	handleTimeline(this.id);
	displayInfo(this.id);
}


// FUNCTIONS
// when a step in the timeline is clicked on,
// hide/show elements as necessary
function handleTimeline(id) {
	if (id === "apply") {
		applyActive.style.visibility = "visible";
		apply.style.visibility = "hidden";
		applyIsOn = !applyIsOn;
		if (callIsOn) {
			instructorCallActive.style.visibility = "hidden";
			instructorCall.style.visibility = "visible";
			callIsOn = !callIsOn;
		} else if (reserveIsOn) {
			reserveSeatActive.style.visibility = "hidden";
			reserveSeat.style.visibility = "visible";
			reserveIsOn = !reserveIsOn;
		} else if (firstIsOn) {
			firstDayActive.style.visibility = "hidden";
			firstDay.style.visibility = "visible";
			firstIsOn = !firstIsOn;
		}
	} else if (id === "instructor-call") {
		instructorCallActive.style.visibility = "visible";
		instructorCall.style.visibility = "hidden";
		callIsOn = !callIsOn;
		if (applyIsOn) {
			applyActive.style.visibility = "hidden";
			apply.style.visibility = "visible";
			applyIsOn = !applyIsOn;
		} else if (reserveIsOn) {
			reserveSeatActive.style.visibility = "hidden";
			reserveSeat.style.visibility = "visible";
			reserveIsOn = !reserveIsOn;
		} else if (firstIsOn) {
			firstDayActive.style.visibility = "hidden";
			firstDay.style.visibility = "visible";
			firstIsOn = !firstIsOn;
		}
	} else if (id === "reserve-seat") {
		reserveSeatActive.style.visibility = "visible";
		reserveSeat.style.visibility = "hidden";
		reserveIsOn = !reserveIsOn;
		if (applyIsOn) {
			applyActive.style.visibility = "hidden";
			apply.style.visibility = "visible";
			applyIsOn = !applyIsOn;
		} else if (callIsOn) {
			instructorCallActive.style.visibility = "hidden";
			instructorCall.style.visibility = "visible";
			callIsOn = !callIsOn;
		} else if (firstIsOn) {
			firstDayActive.style.visibility = "hidden";
			firstDay.style.visibility = "visible";
			firstIsOn = !firstIsOn;
		}
	} else if (id === "first-day") {
		firstDayActive.style.visibility = "visible";
		firstDay.style.visibility = "hidden";
		firstIsOn = !firstIsOn;
		if (applyIsOn) {
			applyActive.style.visibility = "hidden";
			apply.style.visibility = "visible";
			applyIsOn = !applyIsOn;
		} else if (callIsOn) {
			instructorCallActive.style.visibility = "hidden";
			instructorCall.style.visibility = "visible";
			callIsOn = !callIsOn;
		} else if (reserveIsOn) {
			reserveSeatActive.style.visibility = "hidden";
			reserveSeat.style.visibility = "visible";
			reserveIsOn = !reserveIsOn;
		}
	}
}

// display new info in the timeline-info paragraph
function displayInfo(id) {
	if (id === "apply") {
		timelineInfo.textContent = "So you decided that you want to learn to code, and CodeAbode is the place for you.  Take the first step by filling out the application below.";
	} else if (id === "instructor-call") {
		timelineInfo.textContent = "Once you have submitted your application, an instructor will reach out to you via phone.  Expect a call within 3-5 business days.";
	} else if (id === "reserve-seat") {
		timelineInfo.textContent = "After you have spoken with an instructor and had all of your questions answered, you can submit a deposit and reserve your seat!";
	} else if (id === "first-day") {
		timelineInfo.textContent = "It is your first day at CodeAbode!  Good luck as you enter the fun and challenging world of coding.";
	}
}