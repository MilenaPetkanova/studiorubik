<?php

/*
Template Name: Portfolio Page Template
*/

get_header();
?>

    <!-- Main element -->
    <main class="inner-page portfolio-page-template">

        <!-- Portfolio Filters -->
        <section class="portfolio-filters ">
            <ul id="filters" class="container text-upper filter-button-group dropdown">
				<?php
				$terms = get_terms( "jetpack-portfolio-type" ); //change to a different POST TYPE (Jetpack Portfolio Project/Category Type)
				$count = count( $terms );
				echo '<li class="portfolio-filter-item is-checked dropdown-content"><a class="inner-filter" href="javascript:void(0)" title="All" data-filter=".all" class="active">All projects</a></li>'; //default "All"
				if ( $count > 0 ) {

					foreach ( $terms as $term ) {

						$termname = strtolower( $term->name );
						$termname = str_replace( ' ', '-', $termname );
						echo '<li class="portfolio-filter-item dropdown-content"><a class="inner-filter" href="javascript:void(0)" data-filter=".' . $termname . '">' . $term->name . '</a></li>'; //show our custom post type categories
					}
				}
				?>
            </ul>
            <!--Dropdown Arrow-->
            <svg id="dropdown_svg" class="hidden" xmlns="http://www.w3.org/2000/svg" width="21.65" height="8.44" viewBox="0 0 21.65 8.44">
                <g>
                    <polygon points="20.97 1.91 10.82 7.77 9.96 6.64 20.27 0.69 20.97 1.91" stroke="#000" stroke-miterlimit="10"/>
                    <polygon points="0.67 1.91 10.53 7.77 11.35 6.64 1.35 0.69 0.67 1.91" stroke="#000" stroke-miterlimit="10"/>
                </g>
            </svg>
        </section>

        <!-- Display The Content -->
        <section class="container">

            <!-- Headings -->
            <div data-aos="fade-up" class="section-heading text-upper">
                <h2>The Process</h2>
                <p class="background-text">The Process</p>
            </div>

            <!-- Portfolio Section Text -->
            <div data-aos="fade-up" data-aos-delay="300" class="two-column-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet. </p>
                <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.</p>
            </div>

        </section>

        <!-- Isotope Grid -->
        <section id="portfolio">

            <!-- Sizing element for isotope.js -->
            <div class="portfolio-sizer"></div>

			<?php

			//list all projects from Jetpack Portfolio
			$args = array( 'post_type' => 'jetpack-portfolio', 'posts_per_page' => - 1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();

				//get our portfolio categories to a single project
				$terms = get_the_terms( $post->ID, 'jetpack-portfolio-type' );
				if ( $terms && ! is_wp_error( $terms ) ) :

					$links = array();

					foreach ( $terms as $term ) {
						$links[] = $term->name;
					}

					$tax_links = join( " ", str_replace( ' ', '-', $links ) );
					$tax       = strtolower( $tax_links );
				else : $tax = '';
				endif;

				//Style our single project
				echo '<div class="all portfolio-item ' . $tax . '">'; //This MUST Project CATEGORY!

				echo '<a href=" ' . get_the_permalink() . '">';

				// Article Tag with ID
				echo '<article id="post-' . get_the_ID() . '">';

				// Echo the figure containing the image and the caption
				echo '<figure class="grid-item-figure">';

				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}

				echo '<svg xmlns="http://www.w3.org/2000/svg" width="178" height="204.97" viewBox="0 0 178 204.97"><polygon points="176.5 152.86 89 203.24 1.5 152.86 1.5 52.11 89 1.73 176.5 52.11 176.5 152.86" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="3"/></svg>';

				// The Figure Caption Containing the heading element
				echo '<figcaption><h2><a>' . get_the_title() . '</a></h2></figcaption>';

				echo '</figure>';

				echo '</article>';
				echo '</a>';
				echo '</div>';
			endwhile;
			wp_reset_query();
			?>

        </section><!-- #portfolio -->
    </main>

<?php get_footer(); ?>