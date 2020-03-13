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
        $('.inner-filter').each(function () {
            console.log($(this).text());
            var text = $(this).text().replace(' and ', ' & ');
            $(this).text(text);
        });
    }

    // Init only on the Single Portfolio Page
    if ($('.single-jetpack-portfolio').length) {

        $('.services-misc a').each(function () {

            var text = $(this).text().replace(' and ', ' & ');
            $(this).text(text);

            var theString = this.href.replace('/project-type/', '/portfolio/#filter=.');
            var theStringMinusOne = theString.substring(0, theString.length - 1);
            this.href = theStringMinusOne;
        });
    }


});

// initiating the isotope page


// Run this when everything is ready loading ( images,  styles, etc)
window.onload = function () {
    // Loader fade out
    $('.loader-container').fadeOut();
};


//Google Maps

if ($('.page-template-contacts-page').length) {

    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 16,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(42.715617, 23.310703), // Fabrika 126

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [{
                    "saturation": "-100"
                }]
            }, {
                "featureType": "administrative.province",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 65
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": "50"
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road",
                "elementType": "all",
                "stylers": [{
                    "saturation": "-100"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "all",
                "stylers": [{
                    "lightness": "30"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "all",
                "stylers": [{
                    "lightness": "40"
                }]
            }, {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{
                    "saturation": -100
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "hue": "#ffff00"
                }, {
                    "lightness": -25
                }, {
                    "saturation": -97
                }]
            }, {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [{
                    "lightness": -25
                }, {
                    "saturation": -100
                }]
            }]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(42.715617, 23.310703),
            map: map,
            title: 'Snazzy!'
        });
    }

}


