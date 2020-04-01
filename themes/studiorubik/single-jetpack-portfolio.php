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

        <!-- Section Containing: Client Name / Year / Services Provided & Video Lightbox-->
        <section class="misc-section text-upper">

            <!-- Misc. -->
            <div data-aos="fade-up" class="container ">

				<?php
				$misc      = get_field( 'misc_section' );
				$client    = $misc['client'];
				$slug      = $misc['client_slug'];
				$year      = $misc['year'];
				$lightbox  = $misc['video_lightbox_shortcode'];
				$link      = $misc['pdf_button'];
				$link_text = $misc['pdf_button_text'];

				if ( $misc ): ?>

                    <p class="client-misc"><b>client &nbsp;:&nbsp; </b><a
                                href="/studiorubik_clients/<?php echo $slug ?>"><?php echo $client ?></a> <b
                                class="divider">&nbsp;|&nbsp;</b>
                    </p>
                    <p class="year-misc"><b>year &nbsp;:&nbsp; </b><?php echo $year ?> <b
                                class="divider">&nbsp;|&nbsp;</b></p>
                    <p class="services-misc" id="services-misc">
                        <b>services &nbsp;:&nbsp; </b><?php the_terms( $post->ID, 'jetpack-portfolio-type' ); ?>
                    </p>
				<?php endif; ?>

                <!-- Video Lightbox -->
				<?php
				if ( $lightbox ) {
					echo do_shortcode( $lightbox );
				}
				?>

                <div class="button-container cf">
                    <!-- Button Calling the Case Study Lightbox -->
					<?php if ( $lightbox ): ?>
                        <a href="#" title="case study" class="wp-video-popup button button--transparent-black">case
                            study</a>
					<?php endif; ?>

                    <!-- Button Calling the PDF Lightbox -->
					<?php
					if ( $link ): ?>
                        <a href="<?php echo esc_url( $link ); ?>" title="more" class="button button--transparent-black">more</a>
					<?php endif; ?>
                </div>
            </div>
        </section>

        <!-- The Brief Section -->
		<?php
		if ( get_field( 'the_brief_heading' ) ): ?>
            <section class="brief">

                <!-- The Brief Section Headings -->
                <div data-aos="fade-up" class="container section-heading text-upper">
                    <h2><?php the_field( 'the_brief_heading' ) ?></h2>
                    <p class="background-text"><?php the_field( 'the_brief_heading' ) ?></p>
                </div>

                <!-- The Brief Section Content -->
                <div class="container">
                    <div data-aos="fade-zoom-in" data-aos-delay="300" class="two-column-content">
                        <p><?php the_field( 'the_brief_text_area' ) ?></p>
                    </div>
                </div>

                <div data-aos="fade-zoom-in" data-aos-delay="300">
					<?php
					if ( get_field( 'the_brief_slider_revolution_shortcode' ) ) {
						echo do_shortcode( get_field( 'the_brief_slider_revolution_shortcode' ) );
					}
					?>
                </div>
            </section>
		<?php endif; ?>

        <!-- Our Angle Section -->
		<?php

		if ( get_field( 'our_angle_heading' ) ): ?>
            <section class="container our-angle">

                <!-- Our Angle Section Headings -->
                <div data-aos="fade-up" class="section-heading text-upper">
                    <h2><?php the_field( 'our_angle_heading' ) ?></h2>
                    <p class="background-text"><?php the_field( 'our_angle_heading' ) ?></p>
                </div>

                <!-- Our Angle Section Content -->
                <div data-aos="fade-zoom-in" data-aos-delay="300" class="two-column-content">
                    <p><?php the_field( 'our_angle_text_area' ) ?></p>
                </div>

                <!-- Our Angle Slider Revolution Video ACF -->
				<?php
				if ( get_field( 'our_angle_slider_revolution_shortcode' ) ) {
					echo do_shortcode( get_field( 'our_angle_slider_revolution_shortcode' ) );
				}
				?>
            </section>
		<?php endif; ?>

        <!-- The Outcome Section -->
		<?php

		if ( get_field( 'the_outcome_heading' ) ): ?>
            <section class="container our-angle">

                <!-- The Outcome Section Headings -->
                <div data-aos="fade-up" class="section-heading text-upper">
                    <h2><?php the_field( 'the_outcome_heading' ) ?></h2>
                    <p class="background-text"><?php the_field( 'the_outcome_heading' ) ?></p>
                </div>

                <!-- The Outcome Section Content -->
                <div data-aos="fade-zoom-in" data-aos-delay="300" class="two-column-content">
                    <p><?php the_field( 'the_outcome_text_area' ) ?></p>
                </div>

                <!-- The Outcome Slider Revolution Video ACF -->
				<?php
				if ( get_field( 'the_outcome_slider_revolution_shortcode' ) ) {
					echo do_shortcode( get_field( 'the_outcome_slider_revolution_shortcode' ) );
				}
				?>
            </section>
		<?php endif; ?>

        <section class="page-content">
			<?php get_template_part( 'template-parts/page', 'loop' ); ?>
        </section>

        <!--Next & Previous Post Navigation-->
        <section class="container post-navigation text-upper cf">
			<?php previous_post_link( '<strong class="fleft"><svg xmlns="http://www.w3.org/2000/svg" width="18.6648" height="50.3104" viewBox="0 0 18.6648 50.3104"><title>prev_project</title><rect x="-5.0228" y="34.6622" width="28.7104" height="3.3777" transform="translate(36.1471 10.0934) rotate(60)" fill="#8b8a8d" stroke="#8b8a8d" stroke-miterlimit="10"/><polygon points="15.047 0.674 0.692 24.791 3.617 26.429 17.973 2.312 15.047 0.674" fill="#8b8a8d" stroke="#8b8a8d" stroke-miterlimit="10"/></svg>%link</strong>' ); ?>
			<?php next_post_link( '<strong class="fright">%link<svg xmlns="http://www.w3.org/2000/svg" width="18.6648" height="50.3104" viewBox="0 0 18.6648 50.3104"><title>next_project</title><rect x="-5.0228" y="12.2705" width="28.7104" height="3.3777" transform="translate(1.9094 29.0212) rotate(-120)" fill="#8b8a8d" stroke="#8b8a8d" stroke-miterlimit="10"/><polygon points="3.617 49.636 17.973 25.519 15.047 23.881 0.692 47.998 3.617 49.636" fill="#8b8a8d" stroke="#8b8a8d" stroke-miterlimit="10"/></svg></strong>' ); ?>
        </section>
    </main>

    <!-- Get the footer function -->
<?php get_footer() ?>