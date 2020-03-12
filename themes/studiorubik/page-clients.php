<!-- Get the header function -->
<?php get_header() ?>

<!-- Main element -->
<main class="inner-page clients-inner-page">

    <section class="clients">

        <!-- Clients Section Headings -->
        <div class="section-heading text-upper container">
            <h2><?php the_field('clients_section_heading')?></h2>
            <p class="background-text"><?php the_field('clients_section_heading')?></h2>
        </div>

        <div class="container">
            <!-- Clients Section Content -->
            <div class="two-column-content container">
                <p><?php the_field('clients_section_text_area')?></p>
            </div>
        </div>

        <!-- Render The clietns Grid -->
        <?php studiorubik_clients_list(); ?>

    </section>

</main>

<!-- Get the footer function -->
<?php get_footer() ?>