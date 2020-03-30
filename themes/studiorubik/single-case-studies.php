<?php

/*
 * Template Name: Single Case Study
 * Template Post Type: post, page, product
 */

get_header();

?>


    <!-- Main element -->
    <main class="inner-page case-studies-single-post">

        <!-- Hero Section -->
        <section class="hero-section">
            <!-- Slider Revolution Video ACF -->
			<?php
			if ( get_field( 'slider_revolution_shortcode_-_hero' ) ) {
				echo do_shortcode( get_field( 'slider_revolution_shortcode_-_hero' ) );
			}
			?>
        </section>

        <!-- Section Containing: Client Name / Year / Services Provided & Video Lightbox-->
        <section class="misc-section text-upper">
            <!-- Misc. -->
            <div data-aos="fade-up" class="container ">
				<?php
				$misc     = get_field( 'misc_section' );
				$client   = $misc['client'];
				$slug     = $misc['client_slug'];
				$year     = $misc['year'];
				$lightbox = $misc['video_lightbox_shortcode'];

				if ( $misc ): ?>

                    <p class="client-misc"><b>client: </b><a
                                href="/studiorubik_clients/<?php echo $slug ?>"><?php echo $client ?></a> <b>&nbsp;|&nbsp;</b>
                    </p>
                    <p class="year-misc"><b>year: </b><?php echo $year ?> <b>&nbsp;|&nbsp;</b></p>
                    <p class="services-misc" id="services-misc">
                        <b>services: </b><?php the_terms( $post->ID, "category" ); ?>
                    </p>
				<?php endif; ?>

                <!-- Video Lightbox -->
				<?php
				if ( $lightbox ) {
					echo do_shortcode( $lightbox );
				}
				?>

                <!-- Button Calling the Case Study Lightbox -->
                <!--                <a href="#" title="case study" class="wp-video-popup button button--transparent-black">case study</a>-->
            </div>
        </section>

    </main>


<?php get_footer(); ?>