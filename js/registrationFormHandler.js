//check length of entry in field
function updateLength(field, output) {
	currentLength = document.getElementById(field).value.length;
	field_maxLength = document.getElementById(field).maxLength;
	document.getElementById(output).innerHTML = currentLength+'/'+field_maxLength;
	return 1;
}



// Function to check name field
function checkName(field) {
	var myData = document.getElementById(field).value;
	var stringOnly = /^[A-Za-z ]+$/;
	if (myData!=='') {
		if (stringOnly.test(myData)) {
//			window.alert('It is GOOD!');
//			updateCssClass(field, 2);
			name_return = true;
		} else {
//			window.alert('Your data input is invalid!');
//			updateCssClass(field, 1);
			name_return = false;
		}
	} else {
//		window.alert('Please enter data!');
//		updateCssClass(field, 1);
		name_return = false;
	}
	return name_return;
}




//check if email is valid
function checkEmail(field) {
    fieldValue = document.getElementById(field).value;
    isEmailValid = 0;
    if (fieldValue.indexOf('@') >= 1) {
        domainValue = fieldValue.substr(fieldValue.indexOf('@')+1);
        if (domainValue.indexOf('@') == -1) {
            if (domainValue.indexOf('.') >= 1) {
                topLevelDomainValue = domainValue.substr(domainValue.indexOf('.')+1);
                if (topLevelDomainValue.length >= 1) {
                    isEmailValid = 1;
                }
            }
        }
    }
    if (isEmailValid) {
        updateCssClass(field, 2);
        emailValid_return = 1;
    } else {
        updateCssClass(field, 1);
        emailValid_return = 0;
    }
    return emailValid_return;
}





//check if phone number is valid
function checkPhoneNum(field) {
	var currentValue = document.getElementById(field).value;
//	alert(currentValue);  
//	alert("What about here");  

	var checkInputValues = /[^\d.\-\(\)\+xX ]+/g;  
	var checkLengthValues = /[^\d]+/g;  
	
	var currentLengthInput = currentValue.replace(checkLengthValues, "");
//	alert(currentLengthInput);  

	var currentLength = currentLengthInput.length;
//	alert(currentLength);  

	if(currentValue.match(checkInputValues))  
	{  
//		alert("Not a valid Phone Number");  
		return false; 
	} else {  
		if (currentLength == 7 || currentLength == 10 || currentLength == 11 || currentLength == 12 || currentLength == 13)
		{
			return true;
		} else {
//			alert("Not a valid Phone Number");  
			return false; 
		}
 
	} 
}



//check if the input has a valid length
function checkLength(field) {
    fieldLength = document.getElementById(field).value.length;
    if (fieldLength >= 1 && fieldLength <= document.getElementById(field).maxLength) {
        updateCssClass(field, 2);
        checkLength_return = 1;
    } else {
        updateCssClass(field, 1);
        checkLength_return = 0;
    }
    return checkLength_return;
}


//if person checked a reason for learning to code
function checkReason(field) {
	currentReason = document.getElementById(field).value;
//	window.alert("currentReason is " + currentReason);
	if (currentReason == 0)	{
        updateCssClass(field, 1);
        return false;
    } else {
        updateCssClass(field, 2);
        checkReason_return = 1;
	}
	return checkReason_return;
}

function checkTime(field) {
	currentReason = document.getElementById(field).value;
//	window.alert("currentReason is " + currentReason);
	if (currentReason == 0)	{
        updateCssClass(field, 1);
        return false;
    } else {
        updateCssClass(field, 2);
        checkTime_return = 1;
	}
	return checkTime_return;
}

function checkMonth(field) {
	currentReason = document.getElementById(field).value;
//	window.alert("currentReason is " + currentReason);
	if (currentReason == 0)	{
        updateCssClass(field, 1);
        return false;
    } else {
        updateCssClass(field, 2);
        checkMonth_return = 1;
	}
	return checkMonth_return;
}


//scan through radio buttons to figure out if any are checked
function checkRadio(field) {
//	var radios = document.getElementById(field);
	var radios = document.getElementsByName("caapp");

	for (var i=0; i<radios.length; i++) {
		if (radios[i].checked) {
			return radios[i].value;
		} 
	}
	return false;
}

//functions to check if person wants a code abode app
function checkCodeAbodeApp(field) {
	radioValue = checkRadio(field);
	if (radioValue >= 1) {
		return true;
	} else {
		return false;
	}
}




//scan through checkboxes to figure out if any are checked
function checkPersonalOS(field) {
	var checkboxes = document.getElementsByName("personalOS[]");

	for (var i=0; i<checkboxes.length; i++) {
		if (checkboxes[i].checked) {
//			window.alert(checkboxes[i].checked);

			return true;
		} 
	}
	return false;
}





// Function to textbox for letters and numbers
function checkTextArea(field) {
	var myData = document.getElementById(field).value;
	var stringOnly = /^[A-Za-z0-9 .,?!]+$/;
	if (myData!=='') {
		if (stringOnly.test(myData)) {
//			window.alert('It is GOOD!');
//			updateCssClass(field, 2);
			textArea_return = true;
		} else {
//			window.alert('Your data input is invalid!');
//			updateCssClass(field, 1);
			textArea_return = false;
		}
	} else {
//		window.alert('Please enter data!');
//		updateCssClass(field, 1);
		textArea_return = false;
	}
	return textArea_return;
}
  
  
//update css when input is changed
function updateCssClass(field, classIndex) {
    if (classIndex == 1) {
        classMessage = 'wrong';
    } else if (classIndex == 2) {
        classMessage = 'correct';
    }
    document.getElementById(field).className = classMessage;
    return 1;
}




function validateAll(output) {
    test1 = checkName('firstname');
    test2 = checkEmail('email');
	test3 = checkReason('reason');
	test4 = checkLength('code');
	test5 = checkCodeAbodeApp('caapp');
	test6 = checkLength('app');
	test7 = checkLength('yourteam');
	test8 = checkTextArea('team');
	test9 = checkLength('background');
	test10 = checkLength('courses');
	test11 = checkLength('phoneNum');
	test12 = checkPersonalOS('personalOS[]');
	test13 = checkTime('time');
	test14 = checkMonth('month');

	
	cr = document.getElementById('reason').value;
//	window.alert("cr is " + cr);

    errorlist = '';
    if (!test1) {
        errorlist += 'Name is too short/long<br />';
		document.getElementById('firstnameErr').innerHTML = '* Only letters allowed';
    } else {
		document.getElementById('firstnameErr').innerHTML = '* ';
	}
    if (!test2) {
        errorlist += 'Mail is wrong<br />';
		document.getElementById('emailErr').innerHTML = '* Please enter a valid email address';
    } else {
		document.getElementById('emailErr').innerHTML = '* ';
	}
	if (!test3) {
        errorlist += 'Please select a reason for learning to code<br />';
		document.getElementById('reasonErr').innerHTML = '* Please select an option below';
	} else if (cr == 4) {
		if (test4) {
//			window.alert('code');
			if (!checkTextArea('code')) {
//				window.alert('code');
				errorlist += 'Please describe your reason for learning to code<br />';
				document.getElementById('reasonErr').innerHTML = '* ';
				document.getElementById('codeErr').innerHTML = '* Please use only the following characters: A-Z 0-9 .,?!';
			} else {
				document.getElementById('codeErr').innerHTML = '* ';
			}
		} else {
			errorlist += 'Please describe your reason for learning to code<br />';
			document.getElementById('reasonErr').innerHTML = '* ';
			document.getElementById('codeErr').innerHTML = '* If you chose Other, please explain';
		}
	} else {
		document.getElementById('reasonErr').innerHTML = '* ';
	}
	if (!test5) {
		errorlist += 'Please select if you want a CodeAbode app<br />';
		document.getElementById('caappErr').innerHTML = '* Please select an option below';
	} else {
		document.getElementById('caappErr').innerHTML = '* ';
	}
	if (test6) {
 		if (!checkTextArea('app')) {
//			window.alert('app');
		   errorlist += 'Please describe your app<br />';
		   document.getElementById('appErr').innerHTML = '* Please use only the following characters: A-Z 0-9 .,?!';
		} else {
			document.getElementById('appErr').innerHTML = '';
		}
	} else {
		document.getElementById('appErr').innerHTML = '';
	}
	if (test7) {
		if (!checkTextArea('yourteam')) {
//			window.alert('yourteam');
//			updateCssClass('yourteam', 1);
			errorlist += 'List the name of your team mates<br />'; 
			document.getElementById('yourteamErr').innerHTML = '* Please use only the following characters: A-Z 0-9 .,?!';
		} else {
			document.getElementById('yourteamErr').innerHTML = '';
		}
	} else {
		document.getElementById('yourteamErr').innerHTML = '';
	}
	if (!test8) {
		errorlist += 'Please enter the type of person you would like to be paired with<br />'; 
		document.getElementById('teamErr').innerHTML = '* Please use only the following characters: A-Z 0-9 .,?!';
    } else {
		document.getElementById('teamErr').innerHTML = '* ';
	}
	if (test9) {
		if (!checkTextArea('background')) {
//			window.alert('background');
			errorlist += 'Please enter your programming background, if any<br />'; 
			document.getElementById('backgroundErr').innerHTML = '* Please use only the following characters: A-Z 0-9 .,?!';
		} else {
			document.getElementById('backgroundErr').innerHTML = '';
		}
	} else {
		document.getElementById('backgroundErr').innerHTML = '';
	}
	if (test10) {
		if (!checkTextArea('courses')) {
//			window.alert('courses');
			errorlist += 'Please enter the courses you would like to take<br />'; 
			document.getElementById('coursesErr').innerHTML = '* Please use only the following characters: A-Z 0-9 .,?!';
		} else {
			document.getElementById('coursesErr').innerHTML = '';
		}
	} else {
		document.getElementById('coursesErr').innerHTML = '';
	}
	if (!test11) {
		errorlist += 'Please enter a valid phone number<br />'; 
		document.getElementById('phoneNumErr').innerHTML = '* Please enter your phone number';
	} else {
//		window.alert('are we getting here?');
		if (checkPhoneNum('phoneNum')) {
//			window.alert("Great job!");
			document.getElementById('phoneNumErr').innerHTML = '*';
		} else {
//			window.alert('phoneNum');
			errorlist += 'Please enter a valid phone number<br />'; 
			document.getElementById('phoneNumErr').innerHTML = '* Invalid input';
		}
	}
	if (!test12) {
		errorlist += 'Please select an OS<br />'; 
		document.getElementById('personalOSErr').innerHTML = '* Please select an OS';
	} else {
		document.getElementById('personalOSErr').innerHTML = '* ';
	}
	if (!test13) {
        errorlist += 'Please select time<br />';
		document.getElementById('timeErr').innerHTML = '* Please select an option below';
	}
	else
	{
		document.getElementById('timeErr').innerHTML = '* ';	
	}
	if (!test14) {
        errorlist += 'Please select time<br />';
		document.getElementById('monthErr').innerHTML = '* Please select an option below';
	}
	else
	{
		document.getElementById('monthErr').innerHTML = '* ';	
	}
	
	if (errorlist) {
//        document.getElementById(output).innerHTML = errorlist;
        return false;
    }
    return true;
}