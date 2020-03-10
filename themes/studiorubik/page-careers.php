<!-- Get the header function -->
<?php get_header() ?>

<!-- Main element -->
<main class="inner-page careers-inner-page">

    <section class="careers">

        <!-- Clients Section Headings -->
        <div class="section-heading text-upper container">
            <h3><?php the_field('careers_section_heading')?></h3>
            <h2><?php the_field('careers_section_heading')?></h2>
        </div>

        <!-- Render The clietns Grid -->
        <?php studiorubik_careers_list();?>
    </section>

</main>

<!-- Get the footer function -->
<?php get_footer() ?>