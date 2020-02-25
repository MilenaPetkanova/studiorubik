// jQuery no Conflict mode!!!
$ = jQuery.noConflict();

import helloWorld from './components/global/main';
import burgerMenu from './components/burger-menu/burger-menu';

import portfolioCube from './components/front-page/portfolio/portfolio';

// Run this when the document has finished loading
$(document).ready(function () {

    // helloWorld();

    burgerMenu();

    portfolioCube();

    // Init testimonials only on the landing page
    if ($('body.home').length) {
        //Init the bxSlider library on testimonials
        $('.testimonials-list').bxSlider({
            auto: true,
            slideWidth:480,
            minSlides: 2,
            maxSlides: 5,
            controls: false
        });
    }

});