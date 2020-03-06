<!-- Get the header function -->
<?php get_header() ?>

<!-- Main element -->
<main class="container page section with-sidebar">

   <!-- Hero Section -->
   <section class="hero-section">

        <!-- Slider Revolution Video ACF -->
        <?php
            if (get_field('slider_revolution_shortcode_-_hero')) {
                echo do_shortcode(get_field('slider_revolution_shortcode_-_hero'));
            }
        ?>

   </section>

   <!-- Section Containing: Client Name / Year / Services Provided -->
   <section class="misc-section" style="background-color:magenta;">
        <?php
        $misc = get_field('misc_section');
        $client = $misc['client'];
        $year = $misc['year'];
        $services = $misc['services'];

        if( $misc  ): ?>

            <p><?php echo $client ?></p>
            <p><?php echo $year ?></p>
            <p><?php echo $services ?></p>

        <?php endif;?>
   </section>

   <section class>

   </section>


   <!-- Blog Posts inner / single page content -->
   <div class="page-content">
      <?php get_template_part('template-parts/page','loop'); ?>
   </div>

</main>

<!-- Get the footer function -->
<?php get_footer() ?>