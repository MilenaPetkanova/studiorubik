<?php
/*
Template Name: Portfolio Page Template
*/

//  Get the header function
get_header()?>

<!-- Main element -->
<main class="inner-page portfolio-page-template">

    <!-- Portfolio Filters -->
    <section class="portfolio-filters">
        <ul id="filters" class="container text-upper">
            <?php
                $terms = get_terms("jetpack-portfolio-type"); //change to a different POST TYPE (Jetpack Portfolio Project/Category Type)
                $count = count($terms);
                echo '<li class="portfolio-filter-item"><a class="inner-filte-r" href="javascript:void(0)" title="All" data-filter=".all" class="active">All projects</a></li>'; //default "All"
                if ( $count > 0 ){

                    foreach ( $terms as $term ) {

                        $termname = strtolower($term->name);
                        $termname = str_replace(' ', '-', $termname);
                        echo '<li class="portfolio-filter-item"><a class="inner-filter" href="javascript:void(0)" data-filter=".'.$termname.'">'.$term->name.'</a></li>'; //show our custom post type categories
                    }
                }
            ?>
        </ul>
    </section>

    <!-- Display The Content -->
    <section class="container">

        <!-- Headings -->
        <div class="section-heading text-upper">
            <h3>The Process</h3>
            <h2>The Process</h2>
        </div>

        <!-- Portfolio Section Text -->
        <article class="about-us__article two-column-content container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet. </p>
            <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </article>

    </section>

    <!-- Isotope Grid -->
    <section id="portfolio">

        <!-- Sizing element for isotope.js -->
        <div class="portfolio-sizer"></div>

        <?php

        //list all projects from Jetpack Portfolio
        $args = array( 'post_type' => 'jetpack-portfolio', 'posts_per_page' => -1 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();

            //get our portfolio categories to a single project
            $terms = get_the_terms( $post->ID, 'jetpack-portfolio-type' );
            if ( $terms && ! is_wp_error( $terms ) ) :

                $links = array();

                foreach ( $terms as $term ) {
                    $links[] = $term->name;
                }

                $tax_links = join( " ", str_replace(' ', '-', $links));
                $tax = strtolower($tax_links);
                else : $tax = '';
            endif;

            //Style our single project
            echo '<div class="all portfolio-item '. $tax .'">'; //This MUST Project CATEGORY!

                // Article Tag with ID
                echo '<article id="post-'.get_the_ID().'">';

                    // Echo the figure containing the image and the caption
                    echo '<figure class="grid-item-figure">';

                        if ( has_post_thumbnail() ) { the_post_thumbnail();}
                        // The Figure Caption Containing the heading element
                        echo '<figcaption><h2><a href=" ' . get_the_permalink() . '">' . get_the_title() . '</a></h2></figcaption>';

                    echo '</figure>';

                echo '</article>';
            echo '</div>';
        endwhile; wp_reset_query(); ?>



        </section><!-- #portfolio -->
</main>

<!-- Get the footer function -->
<?php get_footer() ?>