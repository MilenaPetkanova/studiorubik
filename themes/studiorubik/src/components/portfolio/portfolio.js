// import './_portfolio.scss';
// import './_portfolio-single.scss';

function portfolioPage() {

    console.log('Hello From The Isotope Portfolio Page');

    jQuery(function ($) {
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function () {
                var number = $(this).find('.number').text();
                return parseInt(number, 10) > 50;
            },
            // show if name ends with -ium
            ium: function () {
                var name = $(this).find('.name').text();
                return name.match(/ium$/);
            }
        };

        function getHashFilter() {
            // get filter=filterName
            var matches = location.hash.match(/filter=([^&]+)/i);
            var hashFilter = matches && matches[1];
            return hashFilter && decodeURIComponent(hashFilter);
        }

        // Init ISOTOPE
        var $container = $('#portfolio');
        //some settings
        $container.imagesLoaded(function () {
            $container.isotope({
                itemSelector: '.portfolio-item',
                percentPosition: true,
                layoutMode: 'masonry',
                masonry: {
                    gutter: 0,
                    columnWidth: '.portfolio-sizer'
                }
            });
        });

        // filter items when filter link is clicked
        $('#filters a').click(function () {
            var selector = $(this).attr('data-filter');
            $('#filters').find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
            var filterAttr = $(this).attr('data-filter');
            // set filter in hash
            location.hash = 'filter=' + encodeURIComponent(filterAttr);
            $container.isotope({
                filter: selector
            });
        });

        var isIsotopeInit = false;

        function onHashchange() {
            var hashFilter = getHashFilter();
            if (!hashFilter && isIsotopeInit) {
                return;
            }
            isIsotopeInit = true;
            // filter isotope
            $container.isotope({
                itemSelector: '.portfolio-item',
                layoutMode: 'masonry',
                // use filterFns
                filter: filterFns[hashFilter] || hashFilter
            });
            // set selected class on button
            // if (hashFilter) {
            //     $filterButtonGroup.find('.is-checked').removeClass('is-checked');
            //     $filterButtonGroup.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
            // }
        }

        $(window).on('hashchange', onHashchange);

// trigger event handler to init Isotope
        onHashchange();
    });


}

export default portfolioPage;