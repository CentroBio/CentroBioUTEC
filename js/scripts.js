// jQuery(document).ready(function () {
//   var navanimationtime = 300;
//   var widthtogglenav = 1016;
//   jQuery(document).on("click", '[data-toggle="slide-collapse"]', function (
//     event
//   ) {
//     jQuery.navMenuCont = jQuery(jQuery(this).data("target"));
//     console.log(jQuery.navMenuCont.css("left"));
//     if (jQuery.navMenuCont.css("left") == "0px") {
//       jQuery.navMenuCont.animate({
//           left: "100%"
//         },
//         navanimationtime,
//         function () {
//           // Animation complete.
//         }
//       );
//       jQuery(".sub-navbar").animate({
//           left: "100%"
//         },
//         navanimationtime,
//         function () {
//           // Animation complete.
//         }
//       );
//       jQuery("body").css("overflow", "inherit");
//     } else {
//       jQuery.navMenuCont.animate({
//           left: "0%"
//         },
//         navanimationtime,
//         function () {
//           // Animation complete.
//         }
//       );
//       jQuery("body").css("overflow", "hidden");
//     }
//   });
//   jQuery(document).on("click", ".drop-submenu", function (event) {
//     console.log("CLick en sub");
//     jQuery.navMenuCont = jQuery("#" + jQuery(this).data("target"));
//     console.log(jQuery.navMenuCont);
//     if (jQuery.navMenuCont.css("left") == "0px") {
//       jQuery.navMenuCont.animate({
//           left: "100%"
//         },
//         navanimationtime,
//         function () {
//           // Animation complete.
//         }
//       );
//       jQuery("body").css("overflow", "inherit");
//     } else {
//       jQuery.navMenuCont.animate({
//           left: "0%"
//         },
//         navanimationtime,
//         function () {
//           // Animation complete.
//         }
//       );
//       jQuery("body").css("overflow", "hidden");
//     }
//   });
//   jQuery(document).on("click", ".regresar-head-btn", function (event) {
//     jQuery.navMenuCont = jQuery(this).parent();
//     console.log(jQuery.navMenuCont);
//     jQuery.navMenuCont.animate({
//         left: "100%"
//       },
//       navanimationtime,
//       function () {
//         // Animation complete.
//       }
//     );

//     jQuery("body").css("overflow", "inherit");
//   });

//   jQuery(window).resize(function () {
//     if (jQuery(window).width() > widthtogglenav) {
//       jQuery(".sub-navbar,.navbar-vert").css("left", "100%");
//       jQuery("body").css("overflow", "inherit");
//     }
//   });

//   jQuery(window).scroll(function () {
//     var hT = jQuery(".container").offset().top,
//       hH = jQuery(".container").outerHeight(),
//       wH = jQuery(window).height(),
//       wS = jQuery(this).scrollTop();
//     //console.log((hT-wH) , wS);
//     //console.log(wS, jQuery('.container').offset().top);
//     if (wS > jQuery(".container").offset().top) {
//       jQuery(".header-on-scroll").addClass("hos-show");
//     } else {
//       jQuery(".header-on-scroll").removeClass("hos-show");
//       jQuery(".header #menu-navigator li").removeClass("hover-hos");
//     }
//   });

//   jQuery(".header-on-scroll ul").on({
//       mouseenter: function () {
//         //REINICIAMOS LAS CLASES
//         jQuery(".header #menu-navigator li").removeClass("hover-hos");
//         //REINICIAMOS LAS CLASES

//         var nro_elemento = jQuery(this).index();
//         nro_elemento++;
//         jQuery(
//           ".header #menu-navigator li:nth-child(" + nro_elemento + ")"
//         ).addClass("hover-hos");
//       }
//     },
//     "li"
//   );

//   jQuery("#menu-navigator").on({
//       mouseleave: function () {
//         var nro_elemento = jQuery(this).index();
//         nro_elemento++;
//         jQuery(".header #menu-navigator li").removeClass("hover-hos");
//       }
//     },
//     ".sub-menu"
//   );

// });

// function movertestizq() {
//   jQuery(".cli-fle-der").show();
//   //jQuery("#clientes-test-row").css( "margin-left", "+=50" );
//   jQuery(".pasantes-inner").animate({
//       "margin-left": "+=296"
//     },
//     500,
//     function () {
//       // Animation complete.
//     }
//   );
//   num_act--;
//   console.log(num_act);
//   if (num_act == 1) {
//     jQuery(".cli-fle-izq").hide();
//   }
// }

// function movertestder() {
//   jQuery(".cli-fle-izq").show();
//   //jQuery("#clientes-test-row").css( "margin-left", "-=50" );
//   jQuery(".pasantes-inner").animate({
//       "margin-left": "-=296"
//     },
//     500,
//     function () {
//       // Animation complete.
//     }
//   );
//   num_act++;
//   if (num_act == num_visit) {
//     jQuery(".cli-fle-der").hide();
//   }
// }

jQuery(document).ready(function ($) {
  $(function () {
    $("body").overlayScrollbars({});

    var menus = Array.from($("#menu-main_menu .menu-item"));
    var dropdownMenus = Array.from($(".dropdown-submenus"));

    menus.forEach((menu, index) => {
      menu.addEventListener("mouseenter", () => {
        if (screen.width >= 1020) {
          if ($(".dropdown-menu-" + index).length) {
            if ($(".dropdown-menu-" + index).css("display") == "none") {
              $(".dropdown-submenus").fadeOut();
              $(".dropdown-menu-" + index).fadeIn();
              $(".dropdown-menu-" + index).css("display", "flex");
            }
          } else {
            $(".dropdown-submenus").fadeOut();
          }
        }
      });
    });

    if (screen.width >= 1020) {
      dropdownMenus.forEach((dropdown) => {
        dropdown.addEventListener("mouseleave", () => {
          $(".dropdown-submenus").fadeOut();
        });
      });
    }
  });
});
