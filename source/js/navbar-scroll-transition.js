$(document).ready(function (){    

  var bannerTitle = $(".banner-title");
  var navbar = $(".navbar");

  // If no banner on the page, exit early & style the navbar
  if (!bannerTitle.length) {
    navbar.addClass("navbar-past-banner");
    return;
  } 

  // Banner is present, enable transition
  navbar.addClass("navbar-transition");

  // Calculate the scroll position where the bottom of the navbar
  // is halfway to the top of the title.
  var titleTop = bannerTitle.offset().top;
  var scrollTransition = (titleTop - navbar.outerHeight(false))/2;

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