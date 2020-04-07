<?php

/*
Template Name: Front Page Template
*/

get_header( 'front' );
?>

<?php while ( have_posts() ): the_post(); ?>

    <!-- front-page.php Main element -->
    <main class="landing-page section">

        <!-- Hero Section -->
        <section class="hero-section">

            <!-- Slider Revolution Video ACF -->
			<?php
			if ( get_field( 'slider_revolution_shortcode_-_hero_video' ) ) {
				echo do_shortcode( get_field( 'slider_revolution_shortcode_-_hero_video' ) );
			}
			?>
        </section>

        <!-- Portfolio Section -->
        <section class="portfolio" id="portfolio-cube">

            <!-- Portoflio Section Headings -->
            <div data-aos="fade-up" class="section-heading text-upper container">
                <h2><?php the_field( 'portfolio_section_heading' ) ?></h2>
                <p class="background-text"><?php the_field( 'portfolio_section_heading' ) ?></p>
            </div>

            <!-- Portfolio Section Text -->
            <div class="container">
                <div data-aos="fade-zoom-in" data-aos-delay="100" class="single-column-content ">
                    <p><?php the_field( 'portfolio_section_text' ) ?></p>
                </div>
            </div>

            <!-- 3D Cube ACF Fields -->
			<?php
			$area1 = get_field( 'area_1' );
			$area2 = get_field( 'area_2' );
			$area3 = get_field( 'area_3' );
			$area4 = get_field( 'area_4' );
			$area5 = get_field( 'area_5' );
			$area6 = get_field( 'area_6' );
			?>

            <!-- Push images from ACF into Javascript Variables -->
            <script>
                const area1 = '<a href="<?php echo $area1['area_link'] ?>" target="_blank"><img src="<?php echo esc_url( $area1['area_image']['url'] ); ?>" alt="<?php echo esc_attr( $area1['area_image']['alt'] ); ?>"/><img class="hexagon-svg" src="<?php the_field( 'hexagon_hover' ); ?>"/><p class="area-description"><?php echo $area1['area_name'] ?></p></a>';
                const area2 = '<a href="<?php echo $area2['area_link'] ?>" target="_blank"><img src="<?php echo esc_url( $area2['area_image']['url'] ); ?>" alt="<?php echo esc_attr( $area2['area_image']['alt'] ); ?>"/><img class="hexagon-svg" src="<?php the_field( 'hexagon_hover' ); ?>"/><p class="area-description"><?php echo $area2['area_name'] ?></p></a>';
                const area3 = '<a href="<?php echo $area3['area_link'] ?>" target="_blank"><img src="<?php echo esc_url( $area3['area_image']['url'] ); ?>" alt="<?php echo esc_attr( $area3['area_image']['alt'] ); ?>"/><img class="hexagon-svg" src="<?php the_field( 'hexagon_hover' ); ?>"/><p class="area-description"><?php echo $area3['area_name'] ?></p></a>';
                const area4 = '<a href="<?php echo $area4['area_link'] ?>" target="_blank"><img src="<?php echo esc_url( $area4['area_image']['url'] ); ?>" alt="<?php echo esc_attr( $area4['area_image']['alt'] ); ?>"/><img class="hexagon-svg" src="<?php the_field( 'hexagon_hover' ); ?>"/><p class="area-description"><?php echo $area4['area_name'] ?></p></a>';
                const area5 = '<a href="<?php echo $area5['area_link'] ?>" target="_blank"><img src="<?php echo esc_url( $area5['area_image']['url'] ); ?>" alt="<?php echo esc_attr( $area5['area_image']['alt'] ); ?>"/><img class="hexagon-svg" src="<?php the_field( 'hexagon_hover' ); ?>"/><p class="area-description"><?php echo $area5['area_name'] ?></p></a>';
                const area6 = '<a href="<?php echo $area6['area_link'] ?>" target="_blank"><img src="<?php echo esc_url( $area6['area_image']['url'] ); ?>" alt="<?php echo esc_attr( $area6['area_image']['alt'] ); ?>"/><img class="hexagon-svg" src="<?php the_field( 'hexagon_hover' ); ?>"/><p class="area-description"><?php echo $area6['area_name'] ?></p></a>';
            </script>

            <!--Cube Visualisation-->
            <div data-aos="zoom-out-up" data-aos-delay="500" data-aos-duration="1500" id="my3Dsurface"
                 class="js3dsurface">
            </div>

            <!-- Button for the Projects Page -->
            <div class="container">

                <!-- Button with fill -->
                <a data-aos="fade-up" data-aos-delay="300" href="/portfolio" title="more projects"
                   class="button button--fill">more projects
                </a>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services">

            <!-- Portoflio Section Headings -->
            <div data-aos="fade-up" class="section-heading text-upper container">
                <h2><?php the_field( 'services_section_heading' ) ?></h2>
                <p class="background-text"><?php the_field( 'services_section_heading' ) ?></p>
            </div>

            <!-- Workflow Headings -->
            <div class="services__workflow">

                <!-- Get the Services Field and register the SVG Divider -->
				<?php
				$services_workflow = get_field( 'services_workflow' );
				$divider_icon      = wp_get_attachment_image_src( $services_workflow['svg_divider'], 'full' )[0];
				?>

                <!-- Services Heading List -->
                <ul class="workflow__list text-upper">

                    <!-- Heading -->
                    <li data-aos="fade-zoom-in" data-aos-delay="200" class="workflow__list-item">
                        <p><?php echo $services_workflow['first_heading'] ?></p>
                    </li>

                    <!-- Divider -->
                    <li data-aos="fade-zoom-in" data-aos-delay="300" class="workflow__list-item svg-test"><img
                                class="style-svg" alt="divider" src="<?php echo $divider_icon ?>"/></li>
                    <!-- Heading -->
                    <li data-aos="fade-zoom-in" data-aos-delay="500" class="workflow__list-item">
                        <p><?php echo $services_workflow['second_heading'] ?></p>
                    </li>

                    <!-- Divider -->
                    <li data-aos="fade-zoom-in" data-aos-delay="700" class="workflow__list-item"><img class="style-svg"
                                                                                                      alt="divider"
                                                                                                      src="<?php echo $divider_icon ?>"/>
                    </li>

                    <!-- Heading -->
                    <li data-aos="fade-zoom-in" data-aos-delay="900" class="workflow__list-item">
                        <p><?php echo $services_workflow['third_heading'] ?></p>
                    </li>

                    <!-- Divider -->
                    <li data-aos="fade-zoom-in" data-aos-delay="1100" class="workflow__list-item"><img class="style-svg"
                                                                                                       alt="divider"
                                                                                                       src="<?php echo $divider_icon ?>"/>
                    </li>

                    <!-- Heading -->
                    <li data-aos="fade-zoom-in" data-aos-delay="1300" class="workflow__list-item">
                        <p><?php echo $services_workflow['fourth_heading'] ?></p>
                    </li>
                </ul>
            </div>

            <!-- Services Grid -->
            <div class="three-column__grid container text-center">

                <!-- Grid Item 1 -->
                <div data-aos="fade-up" data-aos-delay="400" class="three-column__grid-item">

					<?php
					$first_grid_item = get_field( 'first_grid_item' );
					$icon            = wp_get_attachment_image_src( $first_grid_item['grid_item_icon'], 'full' )[0];
					?>

                    <!-- Grid Item Icon & Heading -->
                    <figure>
                        <img class="style-svg" src="<?php echo $icon ?>"/>
                        <figcaption>
                            <h5><?php echo $first_grid_item['grid_item_heading'] ?></h5>
                        </figcaption>
                    </figure>

                    <!-- Grid Item Description -->
                    <div class="grid-item__description">
                        <p class="text-left"><?php echo $first_grid_item['gird_item_description'] ?></p>
                    </div>

                </div>

                <!-- Grid Item 2 -->
                <div data-aos="fade-up" data-aos-delay="400" class="three-column__grid-item">

					<?php
					$second_grid_item = get_field( 'second_grid_item' );
					$icon             = wp_get_attachment_image_src( $second_grid_item['grid_item_icon'], 'full' )[0];
					?>

                    <!-- Grid Item Icon & Heading -->
                    <figure>
                        <img class="style-svg" src="<?php echo $icon ?>"/>
                        <figcaption>
                            <h5><?php echo $second_grid_item['grid_item_heading'] ?></h5>
                        </figcaption>
                    </figure>

                    <!-- Grid Item Description -->
                    <div class="grid-item__description">
                        <p class="text-left"><?php echo $second_grid_item['gird_item_description'] ?></p>
                    </div>
                </div>

                <!-- Grid Item 3 -->
                <div data-aos="fade-up" data-aos-delay="400" class="three-column__grid-item">

					<?php
					$third_grid_item = get_field( 'third_grid_item' );
					$icon            = wp_get_attachment_image_src( $third_grid_item['grid_item_icon'], 'full' )[0];
					?>

                    <!-- Grid Item Icon & Heading -->
                    <figure>
                        <img class="style-svg" src="<?php echo $icon ?>"/>
                        <figcaption>
                            <h5><?php echo $third_grid_item['grid_item_heading'] ?></h5>
                        </figcaption>
                    </figure>

                    <!-- Grid Item Description -->
                    <div class="grid-item__description">
                        <p class="text-left"><?php echo $third_grid_item['gird_item_description'] ?></p>
                    </div>
                </div>

                <!-- Grid Item 4 -->
                <div data-aos="fade-up" data-aos-delay="500" class="three-column__grid-item">

					<?php
					$fourth_grid_item = get_field( 'fourth_grid_item' );
					$icon             = wp_get_attachment_image_src( $fourth_grid_item['grid_item_icon'], 'full' )[0];
					?>

                    <!-- Grid Item Icon & Heading -->
                    <figure>
                        <img class="style-svg" src="<?php echo $icon ?>"/>
                        <figcaption>
                            <h5><?php echo $fourth_grid_item['grid_item_heading'] ?></h5>
                        </figcaption>
                    </figure>

                    <!-- Grid Item Description -->
                    <div class="grid-item__description">
                        <p class="text-left"><?php echo $fourth_grid_item['gird_item_description'] ?></p>
                    </div>
                </div>

                <!-- Grid Item 5 -->
                <div data-aos="fade-up" data-aos-delay="500" class="three-column__grid-item">

					<?php
					$fifth_grid_item = get_field( 'fifth_grid_item' );
					$icon            = wp_get_attachment_image_src( $fifth_grid_item['grid_item_icon'], 'full' )[0];
					?>

                    <!-- Grid Item Icon & Heading -->
                    <figure>
                        <img class="style-svg" src="<?php echo $icon ?>"/>
                        <figcaption>
                            <h5><?php echo $fifth_grid_item['grid_item_heading'] ?></h5>
                        </figcaption>
                    </figure>

                    <!-- Grid Item Description -->
                    <div class="grid-item__description">
                        <p class="text-left"><?php echo $fifth_grid_item['gird_item_description'] ?></p>
                    </div>
                </div>

                <!-- Grid Item 6 -->
                <div data-aos="fade-up" data-aos-delay="500" class="three-column__grid-item">

					<?php
					$sixth_grid_item = get_field( 'sixth_grid_item' );
					$icon            = wp_get_attachment_image_src( $sixth_grid_item['grid_item_icon'], 'full' )[0];
					?>

                    <!-- Grid Item Icon & Heading -->
                    <figure>
                        <img class="style-svg" src="<?php echo $icon ?>"/>
                        <figcaption>
                            <h5><?php echo $sixth_grid_item['grid_item_heading'] ?></h5>
                        </figcaption>
                    </figure>

                    <!-- Grid Item Description -->
                    <div class="grid-item__description">
                        <p class="text-left"><?php echo $sixth_grid_item['gird_item_description'] ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- First Parallax -->
        <section class="parallax">

            <!-- Slider Revolution First Parallax ACF -->
			<?php
			if ( get_field( 'parallax_shortcode' ) ) {
				echo do_shortcode( get_field( 'parallax_shortcode' ) );
			}
			?>
        </section>

        <!-- Clients Section -->
        <section class="clients">

            <!-- Clients Section Headings -->
            <div data-aos="fade-up" class="section-heading text-upper container">
                <h2><?php the_field( 'clients_section_heading' ) ?></h2>
                <p class="background-text"><?php the_field( 'clients_section_heading' ) ?></p>
            </div>

            <!-- Clients Section Content -->
            <div class="container">
                <div data-aos="fade-zoom-in" data-aos-delay="100" class="single-column-content">
                    <p><?php the_field( 'clients_section_text_area' ) ?></p>
                </div>
            </div>

            <!-- Clients Grid -->
            <div data-aos="fade-up" class="clients__grid container">

				<?php
				$clients_grid = get_field( 'clients_grid' );
				?>

                <!-- Grid Item 1 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 2 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_2']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_2']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 3 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_3']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_3']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 4 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_4']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_4']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 5 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_5']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_5']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 6 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_6']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_6']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 7 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_7']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_7']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 8 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_8']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_8']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 9 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_9']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_9']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 10 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_10']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_10']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 11 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_11']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_11']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 12 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_12']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_12']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 13 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_13']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_13']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>

                <!-- Grid Item 14 -->
                <div class="clients__grid-item">

                    <!-- Grid ItemImage -->
                    <figure>
                        <img class="" src="<?php echo esc_url( $clients_grid['client_image_14']['url'] ); ?>"
                             alt="<?php echo esc_attr( $clients_grid['client_image_14']['alt'] ); ?>"/>
                        <a href="#">
                            <h5 class="text-upper text-center">see <br> projects</h5>
                        </a>
                    </figure>
                </div>
            </div>

            <!-- Button for the Clients Page -->
            <div class="button-container container">

                <!-- Button with fill -->
                <a data-aos="fade-up" data-aos-delay="300" href="/clients" title="all clients"
                   class="button button--fill">all clients</a>
            </div>
        </section>

        <!-- Second Parallax -->
        <section class="parallax">

            <!-- Slider Revolution Second Parallax ACF -->
			<?php
			if ( get_field( 'parallax_shortcode_2' ) ) {
				echo do_shortcode( get_field( 'parallax_shortcode_2' ) );
			}
			?>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">

            <!-- Testimonials Section Headings -->
            <div data-aos="fade-up" class="section-heading text-upper container">
                <h2><?php the_field( 'testimonials_section_heading' ) ?></h2>
                <p class="background-text"><?php the_field( 'testimonials_section_heading' ) ?></p>
            </div>

            <!-- Testimonials Slider -->
            <div class="container">
                <ul class="testimonials-list">
					<?php
					//Testimonaials Query
					$args         = array(
						'post_type'      => 'testimonials',
						'posts_per_page' => 10
					);
					$testimonials = new WP_Query( $args );
					while ( $testimonials->have_posts() ): $testimonials->the_post();
						?>

                        <!-- Single Testimonial render -->
                        <li class="slide testimonial text-left">

                            <blockquote>
								<?php the_content(); ?>
                            </blockquote>

                            <div class="testimonial-footer">
								<?php the_post_thumbnail( 'thumbnail' ) ?>
                                <p class="testimonial-name text-upper"><?php the_title(); ?></p>
                                <p class="testimonial-position text-upper">CEO</p>
                                <a href="<?php the_field( 'testimonial_link' ) ?>" title="see project"
                                   class="button button--fill">see project</a>
                            </div>
                        </li>
					<?php endwhile;
					wp_reset_postdata(); ?>
                </ul>
            </div>
        </section>

        <!-- Back to top Arrow -->
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="back-to-top container cf">
            <a href="javascript:" id="return-to-top">
                <div class="back-to-top__hexagon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43.375" height="50.12"><path d="M43.375 37.6L21.688 50.12 0 37.6V12.53L21.688 0l21.687 12.53V37.6z"/><g fill="#fff" stroke="#fff" stroke-miterlimit="10"><path d="M9.845 26.825l12.03-6.946.817 1.415-12.03 6.946z"/><path d="M33.53 26.825L21.862 19.88l-.793 1.415 11.668 6.945.793-1.415z"/></g></svg>
                </div>
            </a>
        </div>

        <!-- Page Content Block -->
        <section>
			<?php the_content(); ?>
        </section>
    </main>
<?php endwhile; ?>
    <!-- Get the footer function -->
<?php get_footer( 'front' ); ?>