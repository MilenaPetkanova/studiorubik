import './_portfolio.scss';
import './_portfolio-single.scss';

function portfolioPage() {

    console.log('Hello From The Isotope Portfolio Page');

    jQuery(function ($) {

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
            $container.isotope({
                filter: selector
            });
        });
    });

}

export default portfolioPage;