/* carousel */
$('.owl-carousel').attr("width", "100%");
$(document).ready(function () {
    $('#hotDealsCarousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        nav: false,
        autoplay: true,
        responsiveClass:true,
        smartSpeed: 3000,
        autoplayTimeout: 7000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
});

$(document).ready(function () {
    $('#featuredCarousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: false,
        autoplay: true,
        smartSpeed: 3000,
        autoplayTimeout: 7000,
        responsiveClass:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});

$(document).ready(function () {
    $('#builderCarousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        nav: false,
        autoplay: true,
        smartSpeed: 3000,
        autoplayTimeout: 7000,
        responsiveClass:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});

(function ($, window, document) {
    $(function () {        
        $('.popover-dismiss').popover({
            trigger: "manual",
            html: true,
            content: function () {
                return $(".content").html();
            }
        });
        
        $('.popover-dismiss').on({
            "shown.bs.popover": function () {
                var input = $(".popover input.link-text");
                input.focus();
            },
            "hide.bs.popover": function () {
                $(this).blur();
            },
            "click": function () {
                $(this).popover("toggle");
            }
        });

        $(".privacy-btn").on({
            "click": function () {
                $(".popover-dismiss").popover("hide");
            }
        });
    });

}(window.jQuery, window, document));

$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});

$(document).ready(function () {
    $(".filter-button").click(function () {
        var value = $(this).attr('data-filter');
        if (value == "all") {
            $('.filter').show('1000');
        }
        else {
            $(".filter").not('.' + value).hide('3000');
            $('.filter').filter('.' + value).show('3000');
        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");
});

/* sidebar menu */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }