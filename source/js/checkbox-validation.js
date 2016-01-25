// validate checkboxes in Application form

// get elements from dom
var form = document.querySelector("#apply-form");
var checkboxes = form.elements["course[]"];
console.log(checkboxes);
var submit = form.elements["submit"];
var checkboxErrMsg = document.querySelector("#check");
var checked = false; // true if any course has been selected

// check validation on change or submit
for (var i = 0; i < checkboxes.length; i++) {
	checkboxes[i].onchange = validateCheckboxes;
}
form.onchange = disableBtn;
form.onsubmit = validateCheckboxes;

// function to check if checkboxes have been validly filled out
function validateCheckboxes(event) {
	checked = false;
	checkboxes = form.elements["course[]"];
	for (var i = 0; i < checkboxes.length; i++) {
		if (checkboxes[i].checked) {
			checked = true;
		}
	}

	if (!checked) {
		event.preventDefault();
		checkboxErrMsg.textContent = "Please select at least one course.";
		submit.classList.add("custom-disable");
	} else {
		checkboxErrMsg.textContent = "";
		submit.classList.remove("custom-disable");
	}

}

function disableBtn() {
	if (!checked) {
		submit.classList.add("custom-disable");
	} else {
		submit.classList.remove("custom-disable");
	}
}