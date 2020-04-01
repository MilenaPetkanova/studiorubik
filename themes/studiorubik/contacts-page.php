<?php

/*
Template Name: Contact Page
*/

get_header();

?>

    <!-- Main element -->
    <main class="inner-page contacts">
        <section class="hero-section">

			<?php
			if ( has_post_thumbnail() ):
				the_post_thumbnail( 'blog', array( 'class' => 'featured-image' ) );
			else:
				echo '<h4 class="text-center">No feature image added</h4>';
			endif;
			?>

            <div class="hero-section__content container">
                <p><?php the_field( 'hero_text' ) ?></p>
            </div>
        </section>

        <section class="cf contacts-section">

            <!-- Google Maps  -->
            <div class="col-2 map-container">
                <div id="map"></div>
            </div>

            <div class="col-2 content">

                <!-- Clients Section Headings -->
                <div data-aos="fade-up" class="section-heading text-upper">
                    <h2><?php the_title(); ?></h2>
                    <p class="background-text"><?php the_title(); ?></p>
                </div>

                <p data-aos="fade-zoom-in"
                   data-aos-delay="300"><?php get_template_part( 'template-parts/page', 'loop' ); ?>
                </p>
            </div>
        </section>
    </main>

    <!-- Get the footer function -->
<?php get_footer(); ?>