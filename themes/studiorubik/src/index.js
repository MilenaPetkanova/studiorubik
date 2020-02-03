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

});