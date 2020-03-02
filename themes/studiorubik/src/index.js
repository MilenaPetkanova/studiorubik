// jQuery no Conflict mode!!!
$ = jQuery.noConflict();

import helloWorld from './components/global/main';
import burgerMenu from './components/burger-menu/burger-menu';

import portfolioCube from './components/front-page/portfolio/portfolio';
import portfolioPage from './components/portfolio/portfolio';
import teamProfiles from './components/about-us/team';

$('#return-to-top').click(function () { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0
    }, 1500);
});

// Run this when the document has finished loading
$(document).ready(function () {

    // Initiate the Burger Menu
    burgerMenu();

    $('.inner-filter').each(function () {
        console.log($(this).text());
        var text = $(this).text().replace('&amp', '&');
        $(this).text(text);
        console.log('changed HTML');
    });

    // Init only on the landing page
    if ($('body.home').length) {

        //Init the 3D Cube on the Landing Page
        portfolioCube();

        //Init the bxSlider library on testimonials
        $('.testimonials-list').bxSlider({
            auto: true,
            slideWidth: 480,
            minSlides: 2,
            maxSlides: 5,
            controls: false
        });

    }

    // Init only on the About Us page
    if ($('body.page-template-page-about-us').length) {

        //Init the 3D Cube on the Landing Page
        teamProfiles();
    }

    // Init only on the Portfolio Page
    if ($('.portfolio-page-template').length) {
        //Init the Isotope Grid
        portfolioPage();
    }


});