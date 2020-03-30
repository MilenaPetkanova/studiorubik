<?php get_header(); ?>

<!-- Main element -->
<main class="container page section with-sidebar">

   <!-- Blog Posts inner / single page content -->
   <div class="page-content">
      <?php get_template_part('template-parts/page','loop'); ?>
   </div>

   <!-- Display the sidebar function -->
   <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>