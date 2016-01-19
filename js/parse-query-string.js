$(document).ready(function(){if(qs=location.search,!(qs.length<=1)){qs=qs.substring(1);for(var t=qs.split("&"),e={},s=t.length-1;s>=0;s--){var o=t[s].split("=");e[o[0]]=o[1]}var n=e.course;if(n){var a=document.getElementById(n);a.checked=!0,$("html, body").animate({scrollTop:$("#apply-section").offset().top-80},750)}}});
//# sourceMappingURL=maps/parse-query-string.js.map
