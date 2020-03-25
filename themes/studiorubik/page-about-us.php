<?php
    /*
    Template Name: Page About Us
    */

get_header( 'front' );

?>

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
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('about_section_heading')?></h2>
            <p class="background-text"><?php the_field('about_section_heading')?></p>
        </div>

        <!-- About Us Section Content -->
        <div data-aos="fade-zoom-in" data-aos-delay="300" class="two-column-content container">
            <p><?php the_field('about_us_text_area')?></p>
        </div>

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
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('mission_-_vission_section_heading')?></h2>
            <p class="background-text"><?php the_field('mission_-_vission_section_heading')?></p>
        </div>

        <!-- Mission & Vision Section Content -->
        <div data-aos="fade-zoom-in" data-aos-delay="300" class="mission-vision__article two-column-content container">
            <p><?php the_field('mission_-_vision_text_area')?></p>
        </div>

    </section>

    <!-- Values Section -->
    <section class="values">
        <!-- Our Values Section Headings -->
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('our_values_section_heading')?></h2>
            <p class="background-text"><?php the_field('our_values_section_heading')?></p>
        </div>

        <!-- Our Values Section Grid -->
        <div class="three-column__grid container text-center">

            <!-- Grid Item 1 -->
            <div data-aos="fade-up" class="three-column__grid-item">

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
            <div data-aos="fade-up" class="three-column__grid-item">

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
            <div data-aos="fade-up" class="three-column__grid-item">

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
            <div data-aos="fade-up" data-aos-delay="300" class="three-column__grid-item">

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
            <div data-aos="fade-up" data-aos-delay="300" class="three-column__grid-item">

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
            <div data-aos="fade-up" data-aos-delay="300" class="values__grid-item">

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
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('team_section_heading')?></h2>
            <p class="background-text"><?php the_field('team_section_heading')?></p>
        </div>

        <!-- Team Section Content -->
        <div class="container ">
            <div data-aos="fade-zoom-in" data-aos-delay="300" class="two-column-content container">
                <p><?php the_field('team_section_text_area')?></p>
            </div>
        </div>

        <!-- Team Section Grid -->
        <div class="three-column__grid container text-center">

            <!-- Grid Item 1 -->
            <div data-aos="fade-up" class="three-column__grid-item">

                <?php

                $first_grid_item = get_field('team_first_grid_item');
                $team_video = $first_grid_item['grid_item_video_mp4'];
                $poster_image = $first_grid_item['grid_item_poster_image'];
                $person_name = $first_grid_item['grid_item_heading'];
                $person_description = $first_grid_item['gird_item_description'];

                if( $first_grid_item  ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <p class="description"><?php echo $person_description ?></p>
                    </div>
                </div>

                <?php endif;?>

            </div>

            <!-- Grid Item 2 -->
            <div data-aos="fade-up" class="three-column__grid-item">

                <?php

                $second_grid_item = get_field('team_2nd_grid_item');
                $team_video = $second_grid_item['grid_item_video_mp4'];
                $poster_image = $second_grid_item['grid_item_poster_image'];
                $person_name = $second_grid_item['grid_item_heading'];
                $person_description = $second_grid_item['gird_item_description'];

                if( $second_grid_item  ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <p class="description"><?php echo $person_description ?></p>
                    </div>

                </div>

                <?php endif;?>

            </div>

            <!-- Grid Item 3 -->
            <div data-aos="fade-up" class="three-column__grid-item">

                <?php

                $third_grid_item = get_field('team_3rd_grid_item');
                $team_video = $third_grid_item['grid_item_video_mp4'];
                $poster_image = $third_grid_item['grid_item_poster_image'];
                $person_name = $third_grid_item['grid_item_heading'];
                $person_description = $third_grid_item['gird_item_description'];

                if( $third_grid_item ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <p class="description"><?php echo $person_description ?></p>
                    </div>
                </div>

                <?php endif;?>

            </div>

            <!-- Grid Item 4 -->
            <div data-aos="fade-up" data-aos-delay="300" class="three-column__grid-item">

                <?php

                $fourth_grid_item = get_field('team_4th_grid_item');
                $team_video = $fourth_grid_item['grid_item_video_mp4'];
                $poster_image = $fourth_grid_item['grid_item_poster_image'];
                $person_name = $fourth_grid_item['grid_item_heading'];
                $person_description = $fourth_grid_item['gird_item_description'];

                if( $fourth_grid_item ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <p class="description"><?php echo $person_description ?></p>

                    </div>
                </div>

                <?php endif;?>
            </div>

            <!-- Grid Item 5 -->
            <div data-aos="fade-up" data-aos-delay="300" class="three-column__grid-item">

                <?php

                $fifth_grid_item = get_field('team_5th_grid_item');
                $team_video = $fifth_grid_item['grid_item_video_mp4'];
                $poster_image = $fifth_grid_item['grid_item_poster_image'];
                $person_name = $fifth_grid_item['grid_item_heading'];
                $person_description = $fifth_grid_item['gird_item_description'];

                if( $fifth_grid_item ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <p class="description"><?php echo $person_description ?></p>
                    </div>

                </div>

                <?php endif;?>

            </div>

            <!-- Grid Item 6 -->
            <div data-aos="fade-up" data-aos-delay="300" class="three-column__grid-item">

                <?php

                $sixth_grid_item = get_field('team_6th_grid_item');
                $team_video = $sixth_grid_item['grid_item_video_mp4'];
                $poster_image = $sixth_grid_item['grid_item_poster_image'];
                $person_name = $sixth_grid_item['grid_item_heading'];
                $person_description = $sixth_grid_item['gird_item_description'];

                if( $sixth_grid_item ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <p class="description"><?php echo $person_description ?></p>
                    </div>
                </div>

                <?php endif;?>
            </div>

            <!-- Grid Item 7 -->
            <div data-aos="fade-up" data-aos-delay="400" class="three-column__grid-item">

                <?php

                $seventh_grid_item = get_field('team_7th_grid_item');
                $team_video = $seventh_grid_item['grid_item_video_mp4'];
                $poster_image = $seventh_grid_item['grid_item_poster_image'];
                $person_name = $seventh_grid_item['grid_item_heading'];
                $person_description = $seventh_grid_item['gird_item_description'];

                if( $seventh_grid_item ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <p class="description"><?php echo $person_description ?></p>
                    </div>
                </div>

                <?php endif;?>
            </div>

            <!-- Grid Item 8 -->
            <div data-aos="fade-up" data-aos-delay="400" class="three-column__grid-item">

                <?php

                $eight_grid_item = get_field('team_8th_grid_item');
                $team_video = $eight_grid_item['grid_item_video_mp4'];
                $poster_image = $eight_grid_item['grid_item_poster_image'];
                $person_name = $eight_grid_item['grid_item_heading'];
                $person_description = $eight_grid_item['gird_item_description'];

                if( $eight_grid_item ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <p class="description"><?php echo $person_description ?></p>
                    </div>
                </div>

                <?php endif;?>
            </div>

            <!-- Grid Item 9 -->
            <div  data-aos="fade-up" data-aos-delay="400" class="three-column__grid-item">

                <?php

                $ninth_grid_item = get_field('team_9th_grid_item');
                $team_video = $ninth_grid_item['grid_item_video_mp4'];
                $poster_image = $ninth_grid_item['grid_item_poster_image'];
                $person_name = $ninth_grid_item['grid_item_heading'];
                $person_description = $ninth_grid_item['gird_item_description'];

                if( $ninth_grid_item ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <p class="description"><?php echo $person_description ?></p>
                    </div>
                </div>

                <?php endif;?>
            </div>

            <!-- Grid Item 10 -->
            <div data-aos="fade-up" data-aos-delay="500" class="three-column__grid-item">

                <?php

                $tenth_grid_item = get_field('team_10th_grid_item');
                $team_video = $tenth_grid_item['grid_item_video_mp4'];
                $poster_image = $tenth_grid_item['grid_item_poster_image'];
                $person_name = $tenth_grid_item['grid_item_heading'];
                $person_description = $tenth_grid_item['gird_item_description'];

                if( $tenth_grid_item ): ?>

                <div class="honeycomb-cell">

                    <!-- Video Element -->
                    <video loop="true" poster="<?php echo $poster_image ?>" class="myvideos honeycomb-cell__video"
                        src="<?php echo $team_video['url']; ?>" width="auto" height="auto"></video>

                    <!-- Name & Title -->
                    <div class="honeycomb-cell__title text-upper">
                        <p class="name"><?php echo $person_name ?></p>
                        <a href="/careers">
                            <p class="description"><?php echo $person_description ?></p>
                        </a>
                    </div>
                </div>

                <?php endif;?>
            </div>
        </div>

    </section>

    <!-- Second Parallax -->
    <section class="parallax">

        <!-- Creative Space Headings -->
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('creative_space_heading')?></h2>
            <p class="background-text"><?php the_field('creative_space_heading')?></p>
        </div>

        <div class="container ">
            <div data-aos="fade-zoom-in" data-aos-delay="300" class="two-column-content container">
                <p><?php the_field('creative_space_text_area')?></p>
            </div>
        </div>

        <!-- Slider Revolution Second Parallax ACF -->
        <?php
            if (get_field('parallax_shortcode_2')) {
                echo do_shortcode(get_field('parallax_shortcode_2'));
            }
        ?>
    </section>

    <!-- Page Content Loop -->
    <div data-aos="fade-zoom-in" data-aos-delay="300" class="page-content">
        <?php get_template_part('template-parts/page','loop'); ?>
    </div>

    <!-- Display the Sidebar -->
    <?php get_sidebar(); ?>

</main>

<!-- Get the footer function -->
<?php get_footer() ?>