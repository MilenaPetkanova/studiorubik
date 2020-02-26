<?php 
/* 
Template Name: Page About Us
*/

//  Get the header function
get_header() ?>

<!-- Main element -->
<main class="inner-page section about-us">

    <!-- Hero Section -->
    <section class="hero-section">

        <!-- Slider Revolution Video ACF -->
        <?php
        if (get_field('slider_revolution_shortcode_-_hero_video')) {
            echo do_shortcode(get_field('slider_revolution_shortcode_-_hero_video'));
        } ?>

    </section>

    <!-- About Us Section -->
    <section class="about-us">

        <!-- About Us Section Headings -->
        <div class="section-heading text-upper container">
            <h3><?php the_field('about_section_heading')?></h3>
            <h2><?php the_field('about_section_heading')?></h2>
        </div>

        <!-- About Us Section Content -->
        <article class="about-us__article two-column-content container">
            <p><?php the_field('about_us_text_area')?></p>
        </article>

    </section>

    <!-- First Parallax -->
    <section class="parallax">

        <!-- Slider Revolution First Parallax ACF -->
        <?php
            if (get_field('parallax_shortcode')) {
                echo do_shortcode(get_field('parallax_shortcode'));
            }
        ?>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision">

        <!-- Mission & Vision Section Headings -->
        <div class="section-heading text-upper container">
            <h3><?php the_field('mission_-_vission_section_heading')?></h3>
            <h2><?php the_field('mission_-_vission_section_heading')?></h2>
        </div>

        <!-- Mission & Vision Section Content -->
        <article class="mission-vision__article two-column-content container">
            <p><?php the_field('mission_-_vision_text_area')?></p>
        </article>

    </section>

    <!-- Values Section -->
    <section class="values">
        <!-- Our Values Section Headings -->
        <div class="section-heading text-upper container">
            <h3><?php the_field('our_values_section_heading')?></h3>
            <h2><?php the_field('our_values_section_heading')?></h2>
        </div>

        <!-- Our Values Section Grid -->
        <div class="three-column__grid container text-center">

            <!-- Grid Item 1 -->
            <div class="three-column__grid-item">

                <?php
                    $first_grid_item = get_field('first_grid_item');
                    $icon = wp_get_attachment_image_src($first_grid_item['grid_item_icon'], 'full')[0];
                ?>

                <!-- Grid Item Icon & Heading -->
                <figure>
                    <img class="style-svg" src="<?php echo $icon ?>" />
                    <figcaption>
                        <h5 class="text-upper"><?php echo $first_grid_item['grid_item_heading'] ?></h5>
                    </figcaption>
                </figure>

                <!-- Grid Item Description -->
                <div class="grid-item__description">
                    <p><?php echo $first_grid_item['gird_item_description'] ?></p>
                </div>

            </div>

            <!-- Grid Item 2 -->
            <div class="three-column__grid-item">

                <?php
                    $second_grid_item = get_field('second_grid_item');
                    $icon = wp_get_attachment_image_src($second_grid_item['grid_item_icon'], 'full')[0];
                ?>

                <!-- Grid Item Icon & Heading -->
                <figure>
                    <img class="style-svg" src="<?php echo $icon ?>" />
                    <figcaption>
                        <h5 class="text-upper"><?php echo $second_grid_item['grid_item_heading'] ?></h5>
                    </figcaption>
                </figure>

                <!-- Grid Item Description -->
                <div class="grid-item__description">
                    <p><?php echo $second_grid_item['gird_item_description'] ?></p>
                </div>

            </div>

            <!-- Grid Item 3 -->
            <div class="three-column__grid-item">

                <?php
                    $third_grid_item = get_field('third_grid_item');
                    $icon = wp_get_attachment_image_src($third_grid_item['grid_item_icon'], 'full')[0];
                ?>

                <!-- Grid Item Icon & Heading -->
                <figure>
                    <img class="style-svg" src="<?php echo $icon ?>" />
                    <figcaption>
                        <h5 class="text-upper"><?php echo $third_grid_item['grid_item_heading'] ?></h5>
                    </figcaption>
                </figure>

                <!-- Grid Item Description -->
                <div class="grid-item__description">
                    <p><?php echo $third_grid_item['gird_item_description'] ?></p>
                </div>

            </div>

            <!-- Grid Item 4 -->
            <div class="three-column__grid-item">

                <?php
                    $fourth_grid_item = get_field('fourth_grid_item');
                    $icon = wp_get_attachment_image_src($fourth_grid_item['grid_item_icon'], 'full')[0];
                ?>

                <!-- Grid Item Icon & Heading -->
                <figure>
                    <img class="style-svg" src="<?php echo $icon ?>" />
                    <figcaption>
                        <h5 class="text-upper"><?php echo $fourth_grid_item['grid_item_heading'] ?></h5>
                    </figcaption>
                </figure>

                <!-- Grid Item Description -->
                <div class="grid-item__description">
                    <p><?php echo $fourth_grid_item['gird_item_description'] ?></p>
                </div>

            </div>

            <!-- Grid Item 5 -->
            <div class="three-column__grid-item">

                <?php
                    $fifth_grid_item = get_field('fifth_grid_item');
                    $icon = wp_get_attachment_image_src($fifth_grid_item['grid_item_icon'], 'full')[0];
                ?>

                <!-- Grid Item Icon & Heading -->
                <figure>
                    <img class="style-svg" src="<?php echo $icon ?>" />
                    <figcaption>
                        <h5 class="text-upper"><?php echo $fifth_grid_item['grid_item_heading'] ?></h5>
                    </figcaption>
                </figure>

                <!-- Grid Item Description -->
                <div class="grid-item__description">
                    <p><?php echo $fifth_grid_item['gird_item_description'] ?></p>
                </div>

            </div>

            <!-- Grid Item 6 -->
            <div class="values__grid-item">

                <?php
                    $sixth_grid_item = get_field('sixth_grid_item');
                    $icon = wp_get_attachment_image_src($sixth_grid_item['grid_item_icon'], 'full')[0];
                ?>

                <!-- Grid Item Icon & Heading -->
                <figure>
                    <img class="style-svg" src="<?php echo $icon ?>" />
                    <figcaption>
                        <h5 class="text-upper"><?php echo $sixth_grid_item['grid_item_heading'] ?></h5>
                    </figcaption>
                </figure>

                <!-- Grid Item Description -->
                <div class="grid-item__description">
                    <p><?php echo $sixth_grid_item['gird_item_description'] ?></p>
                </div>

            </div>

        </div>

    </section>

    <!-- Team Section -->
    <section class="team">
        <!-- Team Section Headings -->
        <div class="section-heading text-upper container">
            <h3><?php the_field('team_section_heading')?></h3>
            <h2><?php the_field('team_section_heading')?></h2>
        </div>

        <!-- Our Values Section Grid -->
        <div class="three-column__grid container text-center">

            <!-- Grid Item 1 -->
            <div class="three-column__grid-item">

                <?php

                $first_grid_item = get_field('team_first_grid_item');
                $team_video = $first_grid_item['grid_item_video_mp4'];
                $poster_image = $first_grid_item['grid_item_poster_image'];
                $person_name = $first_grid_item['grid_item_heading'];
                $person_description = $first_grid_item['gird_item_description'];

                if( $first_grid_item  ): ?>
                                    
                    <div class="honeycomb-cell">

                        <!-- Video Element -->
                        <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video" src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>
                        
                        <!-- Name & Title -->
                        <div class="honeycomb-cell__title text-upper">
                            <p class="name"><?php echo $person_name ?></p>
                            <p class="description"><?php echo $person_description ?></p>
                        </div>
                </div>
                    
                <?php endif;?>


            </div>

            <!-- Grid Item 2 -->
       
            <!-- Grid Item 3 -->
      
            <!-- Grid Item 4 -->

            <!-- Grid Item 5 -->
        
            <!-- Grid Item 6 -->

            <!-- Grid Item 7 -->

            <!-- Grid Item 8 -->

            <!-- Grid Item 9 -->
                    
        </div>

    </section>

    <!-- Second Parallax -->
   <section class="parallax">

    <!-- Slider Revolution Second Parallax ACF -->
    <?php
        if (get_field('parallax_shortcode_2')) {
            echo do_shortcode(get_field('parallax_shortcode_2'));
        }
    ?>

</section>


   </section>

    

    <!-- Page Content Loop -->
    <div class="page-content">
        <?php get_template_part('template-parts/page','loop'); ?>
    </div>

    <!-- Display the Sidebar -->
    <?php get_sidebar(); ?>

</main>



<!-- Get the footer function -->
<?php get_footer() ?>