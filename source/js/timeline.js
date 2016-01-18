// timeline.js
// interactive timeline on the apply page


// DOM ELEMENTS
// timeline elements
var timelineSteps = document.querySelectorAll("#apply, #instructor-call, #reserve-seat, #first-day");
// timeline info paragraph
var timelineInfo = document.querySelector("#timeline-info");


// TIMELINE TEXT CONTENT
var timelineText = {
	"apply": "So you decided that you want to learn to code, and CodeAbode is the place for you.  Take the first step by filling out the application below.",
	"instructor-call": "Once you have submitted your application, an instructor will reach out to you via phone.  Expect a call within 3-5 business days.",
	"reserve-seat": "After you have spoken with an instructor and had all of your questions answered, you can submit a deposit and reserve your seat!",
	"first-day": "It is your first day at CodeAbode!  Good luck as you enter the fun and challenging world of coding."
}


// INITIAL SETUP
activate("apply"); // apply is always active when the page loads
var activeStep = "apply"; // apply is active by default


// BIND EVENTS
for (var i = 0; i < timelineSteps.length; i++){
	timelineSteps[i].addEventListener("click", function() {
		handleTimeline(event.currentTarget.id);
	});
}


// FUNCTIONS
// when a step in the timeline is clicked on,
// activate/deactivate elements as necessary
function handleTimeline(id) {
	if (id != activeStep) {
		activate(id);
		deactivate(activeStep);
		activeStep = id;
	}
}
// set styles for active and inactive steps
function activate(newId) {
	// setup variable for generic query selection
	var id = "#" + newId;
	// get the selected step from the dom
	var step = document.querySelector(id);
	//get the circle, line, and text elements from the selected step
	var line = step.querySelector("line");
	var circle = step.querySelectorAll("circle");
	var words = step.querySelectorAll("text");

	// edit styles
	for (var i = 0; i < circle.length; i++) {
		circle[i].setAttribute("stroke", "#545454");
		circle[i].setAttribute("fill", "#fff");
	}
	line.setAttribute("stroke", "#545454");
	words[1].setAttribute("fill", "#545454");

	// display new info in the timeline-info paragraph
	timelineInfo.textContent = timelineText[newId];
}
function deactivate(newId) {
	// setup variable for generic query selection
	var id = "#" + newId;
	// get the selected step from the dom
	var step = document.querySelector(id);
	//get the circle, line, and text elements from the selected step
	var line = step.querySelector("line");
	var circle = step.querySelectorAll("circle");
	var words = step.querySelectorAll("text");

	// edit styles
	for (var i = 0; i < circle.length; i++) {
		circle[i].setAttribute("stroke", "#fff");
		circle[i].setAttribute("fill", "#25AC6F");
	}
	line.setAttribute("stroke", "#fff");
	words[1].setAttribute("fill", "#fff");
}

