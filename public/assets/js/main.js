/**
 * gallery menu
 */

$(window).on('load', function () {
    $("#cover").fadeOut(1200);

});
/*----- NAVBAR START----*/
jQuery(function($) {
    "use strict";
    $(".navbar-fostrap").click(function() {
        $(".nav-fostrap").toggleClass("visible");
        $("body").toggleClass("cover-bg");
    });
    $(document).ready(function() {
        // navSearch show/hide
        function navSearch() {
            $(".nav-search").on("click", function() {
                $(".search-block").fadeIn(350);
            });
            $(".search-close").on("click", function() {
                $(".search-block").fadeOut(350);
            });
        }
        navSearch();
        // navbarDropdown
        function navbarDropdown() {
            if ($(window).width() < 992) {
                $(".site-navigation .dropdown-toggle").on("click", function() {
                    $(this).siblings(".dropdown-menu").animate({
                            height: "toggle",
                        },
                        300
                    );
                });

                var navbarHeight = $(".site-navigation").outerHeight();
                $(".site-navigation .navbar-collapse").css(
                    "max-height",
                    "calc(100vh - " + navbarHeight + "px)"
                );
            }
        }
        navbarDropdown();
    });
});

/*----NAVBAR END------*/
// Gallery image hover
// $(".img-wrapper").hover(
//     function() {
//         $(this).find(".img-overlay").animate({ opacity: 1 }, 600);
//     },
//     function() {
//         $(this).find(".img-overlay").animate({ opacity: 0 }, 600);
//     }
// );

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function(event) {
    // Prevents default behavior
    event.preventDefault();
    // Adds href attribute to variable
    var imageLocation = $(this).prev().attr("href");
    // Add the image src to $image
    $image.attr("src", imageLocation);
    // Fade in the overlay
    $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function() {
    // Fade out the overlay
    $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function(event) {
    // Hide the current image
    $("#overlay img").hide();
    // Overlay image location
    var $currentImgSrc = $("#overlay img").attr("src");
    // Image with matching location of the overlay image
    var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
    // Finds the next image
    var $nextImg = $($currentImg.closest(".image").next().find("img"));
    // All of the images in the gallery
    var $images = $("#image-gallery img");
    // If there is a next image
    if ($nextImg.length > 0) {
        // Fade in the next image
        $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
    } else {
        // Otherwise fade in the first image
        $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
    }
    // Prevents overlay from being hidden
    event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function(event) {
    // Hide the current image
    $("#overlay img").hide();
    // Overlay image location
    var $currentImgSrc = $("#overlay img").attr("src");
    // Image with matching location of the overlay image
    var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
    // Finds the next image
    var $nextImg = $($currentImg.closest(".image").prev().find("img"));
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
    // Prevents overlay from being hidden
    event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function() {
    // Fade out the overlay
    $("#overlay").fadeOut("slow");
});




$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            577: {
                items: 2
            },
            768: {
                items: 3
            },
            1100: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    })
});
/**
 * Initiate Gallery Lightbox
 */
// const glightbox = GLightbox({
//     selector: '.glightbox'
// });

/**
 * Initiate Gallery Lightbox
 */
// const galelryLightbox = GLightbox({
//     selector: '.galelry-lightbox'
// });

// const searchButton = document.getElementById('search-button');
// const searchInput = document.getElementById('search-input');
// searchButton.addEventListener('click', () => {
//     const inputValue = searchInput.value;
//     alert(inputValue);
// });


/* Demo purposes only */
$(".hover").mouseleave(
    function() {
        $(this).removeClass("hover");
    }
);




const $card = document.querySelector('.card');
let bounds;

function rotateToMouse(e) {
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    const leftX = mouseX - bounds.x;
    const topY = mouseY - bounds.y;
    const center = {
        x: leftX - bounds.width / 2,
        y: topY - bounds.height / 2
    }
    const distance = Math.sqrt(center.x ** 2 + center.y ** 2);

    $card.style.transform = `
    scale3d(1.07, 1.07, 1.07)
    rotate3d(
      ${center.y / 100},
      ${-center.x / 100},
      0,
      ${Math.log(distance)* 2}deg
    )
  `;

    $card.querySelector('.glow').style.backgroundImage = `
    radial-gradient(
      circle at
      ${center.x * 2 + bounds.width/2}px
      ${center.y * 2 + bounds.height/2}px,
      #ffffff55,
      #0000000f
    )
  `;
}

// $card.addEventListener('mouseenter', () => {
//     bounds = $card.getBoundingClientRect();
//     document.addEventListener('mousemove', rotateToMouse);
// });

// $card.addEventListener('mouseleave', () => {
//     document.removeEventListener('mousemove', rotateToMouse);
//     $card.style.transform = '';
//     $card.style.background = '';
// });


$('.back-to-top').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 'slow');
    return false;
});


// NAVBAR
// START DarkModeJS
const body = document.querySelector('body');

// Dark Mode Action
let darkMode = localStorage.getItem("darkMode");
const darkModeToggle = document.querySelector('.dark-mode-button');

// Enable Dark Mode
const enableDarkMode = () => {
    body.classList.add("dark-mode");
    localStorage.setItem("darkMode", "enabled")
}

// Disable Dark Mode
const disableDarkMode = () => {
    body.classList.remove("dark-mode");
    localStorage.setItem("darkMode", null)
}

if (darkMode == "enabled") {
    enableDarkMode();
}

// Desktop Button
// darkModeToggle.addEventListener('click', () => {
//         darkMode = localStorage.getItem("darkMode");
//         if (darkMode !== "enabled") {
//             enableDarkMode();
//         } else {
//             disableDarkMode();
//         }
//     })
// END DarkModeJS



// START SideNavJS
const parentMenuItems = document.querySelectorAll('.top-nav .parent-item');
const submenusList = document.querySelectorAll('.parent-item .submenu');

parentMenuItems.forEach(parentMenu => {
    parentMenu.addEventListener("click", toggleSubmenu);
})

function toggleSubmenu() {
    let submenu = this.getElementsByClassName('submenu')[0];
    this.classList.toggle('active');
    submenu.classList.toggle('active');
}
// END SideNavJS


//










// $(function() {
//     $('.selectpicker').selectpicker();
// });

(function($) {

    $.fn.menumaker = function(options) {

        var cssmenu = $(this),
            settings = $.extend({
                title: "Menu",
                format: "dropdown",
                sticky: false
            }, options);

        return this.each(function() {
            cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
            $(this).find("#menu-button").on('click', function() {
                $(this).toggleClass('menu-opened');
                var mainmenu = $(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.hide().removeClass('open');
                } else {
                    mainmenu.show().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });

            cssmenu.find('li ul').parent().addClass('has-sub');

            multiTg = function() {
                cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                cssmenu.find('.submenu-button').on('click', function() {
                    $(this).toggleClass('submenu-opened');
                    if ($(this).siblings('ul').hasClass('open')) {
                        $(this).siblings('ul').removeClass('open').hide();
                    } else {
                        $(this).siblings('ul').addClass('open').show();
                    }
                });
            };

            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');

            if (settings.sticky === true) cssmenu.css('position', 'fixed');

            resizeFix = function() {
                if ($(window).width() > 768) {
                    cssmenu.find('ul').show();
                }

                if ($(window).width() <= 768) {
                    cssmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);

        });
    };
})(jQuery);

(function($) {
    $(document).ready(function() {

        $("#cssmenu").menumaker({
            title: "Menu",
            format: "multitoggle"
        });

    });
})(jQuery);
$(function() {
    $(".sub-menu-link").click(function(e) {
        e.preventDefault();
        $(".sub-menu-overlay").toggleClass("open");
        $(".sub-menu").toggleClass("open");
        $("body").toggleClass("cover");
        $("body").toggleClass("overflow-hidden");
    });
});

// Accordion2

$(document).ready(function() {
    $("img").click(function() {
        var t = $(this).attr("src");
        $(".modal-body").html("<img src='" + t + "' class='modal-img'>");
        $("#myModal").modal();
    });

    $("video").click(function() {
        var v = $("video > source");
        var t = v.attr("src");
        $(".modal-body").html("<video class='model-vid' controls><source src='" + t + "' type='video/mp4'></source></video>");
        $("#myModal").modal();
    });
}); //EOF Document.ready

console.log($(".open .sub-menu-link #menu-open"));