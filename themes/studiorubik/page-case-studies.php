<?php

/*
Template Name: Case Studies Template
*/

get_header();
?>

    <!-- Main element -->
    <main class="inner-page case-studies">

        <!--Case Stuudies Filters-->
        <section class="portfolio-filters">
            <ul id="filters" class="container text-upper filter-button-group">
                <li class="portfolio-filter-item is-checked"><a class="inner-filter" href="javascript:void(0)"
                                                                title="All" data-filter="*" class="active">All
                        projects</a></li>
                <?php
                $terms = get_terms('category', array('parent' => 42)); // you can use any taxonomy, instead of just 'category'
                $count = count($terms); //How many are they?
                if ($count > 0) {  //If there are more than 0 terms
                    foreach ($terms as $term) {  //for each term:
                        echo "<li class='portfolio-filter-item'><a class='inner-filter' href='javascript:void(0)' href='#' data-filter='." . $term->slug . "'>" . $term->name . "</a></li>\n";
                        //create a list item with the current term slug for sorting, and name for label
                    }
                }
                ?>
            </ul>
        </section>

        <!-- Display The Content -->
        <section class="container">

            <!-- Headings -->
            <div data-aos="fade-up" class="section-heading text-upper">
                <h2>Case Studies</h2>
                <p class="background-text">Case Studies</p>
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
            <?php $the_query = new WP_Query('posts_per_page=50'); //Check the WP_Query docs to see how you can limit which posts to display ?>
            <?php if ($the_query->have_posts()) : ?>

                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $termsArray = get_the_terms($post->ID, "category");  //Get the terms for this particular item
                    $termsString = ""; //initialize the string that will contain the terms
                    foreach ($termsArray as $term) { // for each term
                        $termsString .= $term->slug . ' '; //create a string that has all the slugs
                    } ?>

                    <div class="<?php echo $termsString; ?> all portfolio-item"> <?php // 'item' is used as an identifier (see Setp 5, line 6) ?>

                        <?php echo '<article id="post-' . get_the_ID() . '">'; ?>

                        <figure class="grid-item-figure">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } ?>
                            <?php echo '<figcaption><h2><a href=" ' . get_the_permalink() . '">' . get_the_title() . '</a></h2></figcaption>'; ?>
                        </figure>

                        <?php echo '</article>'; ?>
                    </div> <!-- end item -->
                <?php endwhile; ?>
            <?php endif; ?>
        </section>


    </main>

<?php get_footer(); ?>