import './burger-button.scss';
import './burger-menu.scss';

function burgerMenu() {

    let didScroll;
    let lastScrollTop = 0;
    const navbarHeight = $('header').outerHeight();

    // Hide Header on on scroll down
    $(window).scroll(function () {
        didScroll = true;
        let st = $(this).scrollTop();

        if (st > lastScrollTop && st > navbarHeight) {
            $('header').removeClass('show-nav').addClass('hide-nav');
            $('.nav-toggle').removeClass('open');
        } else {
            if (st + $(window).height() < $(document).height()) {
                $('header').removeClass('hide-nav').addClass('show-nav');
            }
        }
        lastScrollTop = st;
    });

    //Hide logo after the first section scroll
    const topofDiv = $(".site-header").offset().top; //gets offset of header
    const height = $(".site-header").outerHeight(); //gets height of header

    $(window).scroll(function () {

        if ($(window).scrollTop() > $(".site-header").height()) {

            $("#header-logo").addClass("fadeOut");
            $("#header-logo").removeClass("fadeIn");

        } else {

            $("#header-logo").removeClass("fadeOut");
            $("#header-logo").addClass("fadeIn");
        }
    });


    //Open the burger menu
    $("#toggle").click(function () {
        $(this).toggleClass("is-active");
        $("#burger-menu-container").toggleClass("opened");
    });

    //Close the menu from clicking anywhere
    $("#burger-menu-container").click(function () {
        $('#toggle').toggleClass("is-active");
        $("#burger-menu-container").toggleClass("opened");
    });



}

export default burgerMenu;