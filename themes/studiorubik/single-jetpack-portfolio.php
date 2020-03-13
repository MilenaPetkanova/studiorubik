<?php get_header() ?>

    <!-- Main element -->
    <main class="single-project-page">

        <!-- Hero Section -->
        <section class="hero-section">
            <!-- Slider Revolution Video ACF -->
			<?php
			if ( get_field( 'slider_revolution_shortcode_-_hero' ) ) {
				echo do_shortcode( get_field( 'slider_revolution_shortcode_-_hero' ) );
			}
			?>
        </section>

        <section class="test-section">

        </section>

        <!-- Section Containing: Client Name / Year / Services Provided & Video Lightbox-->
        <section class="misc-section text-upper">
            <!-- Misc. -->
            <div class="container ">
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
                        <b>services: </b><?php the_terms( $post->ID, 'jetpack-portfolio-type' ); ?>
                    </p>
				<?php endif; ?>

                <!-- Video Lightbox -->
				<?php
				if ( $lightbox ) {
					echo do_shortcode( $lightbox );
				}
				?>

                <!-- Button Calling the Case Study Lightbox -->
                <a href="#" title="case study" class="wp-video-popup button button--transparent-black">case study</a>
            </div>
        </section>


        <!-- The Brief Section -->
        <section class="container brief">
            <!-- The Brief Section Headings -->
            <div class="section-heading text-upper">
                <h2><?php the_field( 'the_brief_heading' ) ?></h2>
                <p class="background-text"><?php the_field( 'the_brief_heading' ) ?></p>
            </div>

            <!-- The Brief Section Content -->
            <article class="about-us__article two-column-content">
                <p><?php the_field( 'the_brief_text_area' ) ?></p>
            </article>

            <!-- The Brief Slider Revolution Video ACF -->
			<?php
			if ( get_field( 'the_brief_slider_revolution_shortcode' ) ) {
				echo do_shortcode( get_field( 'the_brief_slider_revolution_shortcode' ) );
			}
			?>

        </section>

        <!-- Our Angle Section -->
        <section class="container our-angle">
            <!-- Our Angle Section Headings -->
            <div class="section-heading text-upper">
                <h2><?php the_field( 'our_angle_heading' ) ?></h2>
                <p class="background-text"><?php the_field( 'our_angle_heading' ) ?></p>
            </div>

            <!-- Our Angle Section Content -->
            <article class="about-us__article two-column-content">
                <p><?php the_field( 'our_angle_text_area' ) ?></p>
            </article>

            <!-- Our Angle Slider Revolution Video ACF -->
			<?php
			if ( get_field( 'our_angle_slider_revolution_shortcode' ) ) {
				echo do_shortcode( get_field( 'our_angle_slider_revolution_shortcode' ) );
			}
			?>

        </section>

        <!-- The Outcome Section -->
        <section class="container our-angle">
            <!-- The Outcome Section Headings -->
            <div class="section-heading text-upper">
                <h2><?php the_field( 'the_outcome_heading' ) ?></h2>
                <p class="background-text"><?php the_field( 'the_outcome_heading' ) ?></p>
            </div>

            <!-- The Outcome Section Content -->
            <article class="about-us__article two-column-content">
                <p><?php the_field( 'the_outcome_text_area' ) ?></p>
            </article>

            <!-- The Outcome Slider Revolution Video ACF -->
			<?php
			if ( get_field( 'the_outcome_slider_revolution_shortcode' ) ) {
				echo do_shortcode( get_field( 'the_outcome_slider_revolution_shortcode' ) );
			}
			?>

        </section>


        <div class="page-content">
			<?php get_template_part( 'template-parts/page', 'loop' ); ?>
        </div>

        <section class="container post-navigation text-upper cf">
			<?php previous_post_link( '<strong class="fleft">%link</strong>' ); ?>
			<?php next_post_link( '<strong class="fright">%link</strong>' ); ?>
        </section>

    </main>

    <!-- Get the footer function -->
<?php get_footer() ?>