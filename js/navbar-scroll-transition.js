$(document).ready(function(){var a=$(".banner-title"),n=$(".navbar");if(!a.length)return void n.addClass("navbar-past-banner");n.addClass("navbar-transition");var r=a.offset().top,t=(r-n.outerHeight(!1))/2;$(document).scroll(function(){var a=$(this).scrollTop();a>=t?n.addClass("navbar-past-banner"):n.removeClass("navbar-past-banner")})});
//# sourceMappingURL=maps/navbar-scroll-transition.js.map
