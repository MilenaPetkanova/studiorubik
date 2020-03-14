<?php get_header(); ?>

<!-- Main element -->
<main class="single-client-page">

    <!-- Clients Page Headings and content-->
    <section class="container">

        <div data-aos="fade-up" class="section-heading text-upper">
            <h2><?php the_title(); ?></h2>
            <p class="background-text"><?php the_title(); ?></p>
        </div>

        <article class="about-us__article two-column-content">
            <p><?php get_template_part('template-parts/page','loop'); ?></p>
        </article>

    </section>

    <section class="">
        <?php
            if (get_field('client_section_portfolio_grid_shortcode')) {
                echo do_shortcode(get_field('client_section_portfolio_grid_shortcode'));
            }
        ?>
    </section>

</main>

<!-- Get the footer function -->
<?php get_footer(); ?>