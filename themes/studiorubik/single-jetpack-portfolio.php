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


   <!-- Blog Posts inner / single page content -->
   <div class="page-content">
      <?php get_template_part('template-parts/page','loop'); ?>
      <p>Hello from single portfolio item</p>
   </div>

</main>

<!-- Get the footer function -->
<?php get_footer() ?>