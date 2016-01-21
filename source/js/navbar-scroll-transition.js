$(document).ready(function (){    

  // Cache DOM elements
  var navbar = $(".navbar");
  var navbarToggle = navbar.find(".navbar-toggle"); // Mobile nav toggle
  var bannerTitle = $(".banner-title"); // First header inside banner

  // If no banner on the page, exit early & style the navbar.
  if (!bannerTitle.length) {
    navbar.addClass("navbar-past-banner");
    return;
  } 

  // Banner is present, enable transition.
  navbar.addClass("navbar-transition");

  // Calculate the scroll position where the bottom of the navbar
  // is halfway to the top of the banner title.
  var titleTop = bannerTitle.offset().top;
  var scrollTransition = (titleTop - navbar.outerHeight(false))/2;

  // Handle mobile nav menu.  If the mobile nav menu is opened, style the banner
  // as if it has been scrolled past the banner (opaque).  Otherwise, return it
  // to it's normal state.
  var isMobileMenuOpen = false;
  navbarToggle.click(function () { 
    // Timeout hack - give the bootstrap click handler a chance to run.  That
    // is the function that controls adding/removing .collapsed from the toggle.
    setTimeout(function () {
      isMobileMenuOpen = !navbarToggle.hasClass("collapsed");
      if (isMobileMenuOpen) {
        navbar.addClass("navbar-past-banner");
      }
      else {
        // Reset back to default styling if we aren't past the transition point
        var scrollPos = $(this).scrollTop();
        if (scrollPos < scrollTransition) {
          navbar.removeClass("navbar-past-banner");
        } 
      }
    }, 0);
  });

  // Scroll event to toggle .navbar-past-banner
  $(document).scroll(function () { 
    // Don't change banner styling if the mobile nav menu is expanded
    if (isMobileMenuOpen) return;
    // Use the scroll position to change the banner styling
    var scrollPos = $(this).scrollTop();
    if (scrollPos >= scrollTransition) {
      navbar.addClass("navbar-past-banner");
    } 
    else {
      navbar.removeClass("navbar-past-banner");
    }
  });

});