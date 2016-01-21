// timeline.js
// interactive timeline on the apply page


// DOM ELEMENTS
// timeline elements
var timelineSteps = document.querySelectorAll(".apply, .instructor-call, .reserve-seat, .first-day");
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
		handleTimeline(event.currentTarget.getAttribute("class"));
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
function activate(newClass) {
	// setup variable for generic query selection
	var myClass = "." + newClass;
	// get the selected step from the dom
	var steps = document.querySelectorAll(myClass);

	// both desktop and mobile versions of the timeline
	// are in the DOM, the for-loop accounts for both versions
	for (var i = 0; i < steps.length; i++) {
		//get the circle, line, and text elements from the selected step
		var line = steps[i].querySelector("line");
		var circle = steps[i].querySelectorAll("circle");
		var words = steps[i].querySelectorAll("text");

		// edit styles
		for (var j = 0; j < circle.length; j++) {
			circle[j].setAttribute("stroke", "#545454");
			circle[j].setAttribute("fill", "#fff");
		}
		if (i === 0) line.setAttribute("stroke", "#545454");

		words[0].setAttribute("stroke-width", "0.5px");
		words[0].setAttribute("stroke", "#fff");
		words[1].setAttribute("fill", "#545454");
	}

	// display new info in the timeline-info paragraph
	timelineInfo.textContent = timelineText[newClass];
}
function deactivate(newClass) {
	// setup variable for generic query selection
	var myClass = "." + newClass;
	// get the selected step from the dom
	var steps = document.querySelectorAll(myClass);

	// both desktop and mobile versions of the timeline
	// are in the DOM, the for-loop accounts for both versions
	for (var i = 0; i < steps.length; i++) {
		//get the circle, line, and text elements from the selected step
		var line = steps[i].querySelector("line");
		var circle = steps[i].querySelectorAll("circle");
		var words = steps[i].querySelectorAll("text");

		// edit styles
		for (var j = 0; j < circle.length; j++) {
			circle[j].setAttribute("stroke", "#fff");
			circle[j].setAttribute("fill", "#25AC6F");
		}

		if (i === 0) line.setAttribute("stroke", "#fff");

		words[0].setAttribute("stroke", "none");
		words[1].setAttribute("fill", "#fff");
	}
}

