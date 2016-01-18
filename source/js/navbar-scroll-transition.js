$(document).ready(function (){    

  var banner = $(".banner");
  var navbar = $(".navbar");

  // If no banner on the page, exit early & style the navbar
  if (!banner.length) {
    navbar.addClass("navbar-past-banner");
    return;
  } 

  // Banner is present, enable transition
  navbar.addClass("navbar-transition");

  // Calculate the scroll position where the bottom of the navbar leaves the 
  // the bottom of the banner.
  //   transition = bottom of banner - height of nav bar 
  // (For calculating heights, include padding & border but not margin)
  var bottomBanner = banner.offset().top + banner.outerHeight(false);
  var scrollTransition = bottomBanner - navbar.outerHeight(false);
 
  // Scroll event to toggle .navbar-past-banner
  $(document).scroll(function () { 
    var scrollPos = $(this).scrollTop();
    if(scrollPos >= scrollTransition) {
      navbar.addClass("navbar-past-banner");
    } 
    else {
      navbar.removeClass("navbar-past-banner");
    }
  });

});