<!-- Get the header function -->
<?php get_header() ?>



<?php while (have_posts()): the_post();?>

<!-- front-page.php Main element -->
<main class="page section with-sidebar">

   <section class="video-section">

   <?php the_content();?>

   <p>
      <?php the_field('slider_revolution')?>
   </p>

   </section>

   <section class="portfolio" id="portfolio-cube">

      <!--Cube Visualisation-->
      <div id="my3Dsurface" class="js3dsurface" data-facewidth="450"></div>

   </section>


</main>

<?php endwhile;?>

<!-- Get the footer function -->
<?php get_footer() ?>