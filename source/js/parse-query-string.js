$(document).ready(function (){    

  // Check for query string
  qs = location.search;
  if (qs.length <= 1) return;

  // Query string exists, parse it into a query object
  qs = qs.substring(1); // Remove the "?" delimiter
  var keyValPairs = qs.split("&");
  var queryObject = {};
  for (var i = keyValPairs.length - 1; i >= 0; i--) {
    var keyVal = keyValPairs[i].split("=");
    queryObject[keyVal[0]] = keyVal[1];
  };

  var course = queryObject["course"];
  if (course) {
    // If there is a course in the query string, check the matching checkbox
    var courseCheckbox = document.getElementById(course);
    courseCheckbox.checked = true;
    // Scroll smoothly to the apply form
    $('html, body').animate({
        scrollTop: $("#apply-section").offset().top - 80
    }, 750);
  }
    
});