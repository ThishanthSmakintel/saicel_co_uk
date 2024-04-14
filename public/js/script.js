jQuery(document).ready(function ($) {
    console.log("Document is ready!");
    $(".beforeAfter").beforeAfter();
    console.log(
        "beforeAfter plugin applied to elements with class 'beforeAfter'"
    );

    $(window).on("scroll", function () {
        function fixedHeader() {
            var headerTopBar = $(".top-bar").outerHeight();
            var headerOneTopSpace = $(".header-one .logo-area").outerHeight();

            var headerOneELement = $(".header-one .site-navigation");
            var headerTwoELement = $(".header-two .site-navigation");

            if ($(window).scrollTop() > headerTopBar + headerOneTopSpace) {
                headerOneELement.addClass("navbar-fixed");
                $(".header-one").css(
                    "margin-bottom",
                    headerOneELement.outerHeight()
                );
            } else {
                headerOneELement.removeClass("navbar-fixed");
                $(".header-one").css("margin-bottom", 0);
            }
            if ($(window).scrollTop() > headerTopBar) {
                headerTwoELement.addClass("navbar-fixed");
                $(".header-two").css(
                    "margin-bottom",
                    headerTwoELement.outerHeight()
                );
            } else {
                headerTwoELement.removeClass("navbar-fixed");
                $(".header-two").css("margin-bottom", 0);
            }
        }
        fixedHeader();

        function counter() {
            var oTop;
            if ($(".counterUp").length !== 0) {
                oTop = $(".counterUp").offset().top - window.innerHeight;
            }
            if ($(window).scrollTop() > oTop) {
                $(".counterUp").each(function () {
                    var $this = $(this),
                        countTo = $this.attr("data-count");
                    $({ countNum: $this.text() }).animate(
                        { countNum: countTo },
                        {
                            duration: 1000,
                            easing: "swing",
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                            },
                        }
                    );
                });
            }
        }
        counter();

        function scrollTopBtn() {
            var scrollToTop = $("#back-to-top"),
                scroll = $(window).scrollTop();
            if (scroll >= 50) {
                scrollToTop.fadeIn();
            } else {
                scrollToTop.fadeOut();
            }
        }
        scrollTopBtn();
    });

    function navbarDropdown() {
        if ($(window).width() < 992) {
            $(".site-navigation .dropdown-toggle").on("click", function () {
                $(this).siblings(".dropdown-menu").animate(
                    {
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

    function backToTop() {
        $(".back-to-top").on("click", function () {
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                800
            );
            return false;
        });
    }
    backToTop();
});
