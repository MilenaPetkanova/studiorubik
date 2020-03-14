<!-- Get the header function -->
<?php get_header() ?>

<!-- Main element -->
<main class="single-career-page">

    <section class="hero-section">
        <?php
            if( has_post_thumbnail() ):
                the_post_thumbnail('blog',array('class' => 'featured-image'));
            else:
                echo '<h4 class="text-center">No feature image added</h4>';
            endif;
        ?>

        <div class="hero-section__content container">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <p><?php get_template_part('template-parts/page','loop'); ?></p>
            <a href="#" title="apply" class="button button--transparent-white">apply</a>
        </div>
    </section>

    <!-- Tasks Section -->
    <section class="tasks">

        <!-- Tasks Section Headings -->
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('tasks_heading')?></h2>
            <p class="background-text"><?php the_field('tasks_heading')?></p>
        </div>

        <!-- About Us Section Content -->
        <article class="two-column-content container">
            <p><?php the_field('tasks_content')?></p>
        </article>

    </section>

    <!-- Skills Section -->
    <section class="tasks">

        <!-- Skills Section Headings -->
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('skills_heading')?></h2>
            <p class="background-text"><?php the_field('skills_heading')?></p>
        </div>

        <!-- Skills Section Content -->
        <article class="two-column-content container">
            <p><?php the_field('skills_content')?></p>
        </article>

    </section>

    <!-- We Offer Section -->
    <section class="tasks">

        <!-- We Offer Section Headings -->
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('we_offer_heading')?></h2>
            <p class="background-text"><?php the_field('we_offer_heading')?></p>
        </div>

        <!-- Skills Section Content -->
        <article class="two-column-content container">
            <p><?php the_field('we_offer_content')?></p>
        </article>

        <div class="container apply-button">
            <a href="#" title="apply" class="button button--fill">apply</a>
        </div>
    </section>

</main>

<!-- Get the footer function -->
<?php get_footer() ?>