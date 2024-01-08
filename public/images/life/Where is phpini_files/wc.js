/* Map */

jQuery(document).ready(function () {
  jQuery("#googlemap").gMap({
    address: "Saint George, UT, United States",
    zoom: 10,
    maptype: 'HYBRID',
    markers: [
      {
        address: "Saint George, UT, United States",
        html: "Web Carpenter",
        popup: 1,
        icon: {
          image: "../images/map/marker-blue.png",
          iconsize: [38, 53],
          iconanchor: [30, 53]
        }
      }
    ]
  });
});

/*
  Slidemenu
*/
(function () {
  var $body = document.body
    , $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

  if (typeof $menu_trigger !== 'undefined') {
    $menu_trigger.addEventListener('click', function () {
      $body.className = ($body.className == 'menu-active') ? '' : 'menu-active';
    });
  }


  "use strict";

  var toggles = document.querySelectorAll(".cmn-toggle-switch");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      (this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
    });
  }

})();
