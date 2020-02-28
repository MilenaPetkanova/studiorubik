<?php
/*
Template Name: Portfolio Page Template
*/

//  Get the header function
get_header()?>

<!-- Main element -->
<main class="inner-page portfolio-page-template">

    <ul id="filters">
            <?php
                $terms = get_terms("jetpack-portfolio-type"); //change to a different POST TYPE (Jetpack Portfolio Project/Category Type)
                $count = count($terms);
                    echo '<li><a href="javascript:void(0)" title="All" data-filter=".all" class="active">All</a></li>'; //default "All"
                if ( $count > 0 ){

                    foreach ( $terms as $term ) {

                        $termname = strtolower($term->name);
                        $termname = str_replace(' ', '-', $termname);
                        echo '<li><a href="javascript:void(0)" data-filter=".'.$termname.'">'.$term->name.'</a></li>'; //show our custom post type categories
                    }
                }
            ?>
    </ul>

    <!-- Let's list our Portfolio Projects-->
    <div id="portfolio">

        <?php
        $args = array( 'post_type' => 'jetpack-portfolio', 'posts_per_page' => -1 ); //list all projects from Jetpack Portfolio
        $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();

        $terms = get_the_terms( $post->ID, 'jetpack-portfolio-type' );	//get our portfolio categories to a single project
                if ( $terms && ! is_wp_error( $terms ) ) :

                    $links = array();

                    foreach ( $terms as $term ) {
                        $links[] = $term->name;
                    }

                    $tax_links = join( " ", str_replace(' ', '-', $links));
                    $tax = strtolower($tax_links);
                else :
                $tax = '';
                endif;

                //Style our single project
                echo '<div class="all portfolio-item '. $tax .'">'; //Important! Without the correct tax your filters won't work! This MUST be your Project CATEGORY!
                echo '<article id="post-'.get_the_ID().'">';
                if ( has_post_thumbnail() ) {the_post_thumbnail();}
                    echo '<div class="mask">
                    <h2><a href=" '.get_the_permalink().'">'.get_the_title().'</a></h2>
                    <p class="category">'.get_the_term_list($post->ID, 'jetpack-portfolio-type', '', ' / ', '').'
                    </p>
                    <span class="date">'.get_the_modified_date().'</span></p>
                    </div>';
                    echo '</article>';
                    echo '</div>';
        endwhile; ?>

    </div><!-- #portfolio -->


</main>

<!-- Get the footer function -->
<?php get_footer() ?>