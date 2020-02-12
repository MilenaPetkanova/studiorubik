<!-- Get the header function -->
<?php get_header()?>

<?php while (have_posts()): the_post();?>
<!-- front-page.php Main element -->
<main class="page section with-sidebar">

   <!-- Hero Section -->
   <section class="hero-section">

      <!-- Slider Revolution Video ACF -->
      <?php
         if (get_field('slider_revolution_shortcode_-_hero_video')) {
            echo do_shortcode(get_field('slider_revolution_shortcode_-_hero_video'));
         }
      ?>
   </section>

   <!-- Portfolio Section -->
   <section class="portfolio container" id="portfolio-cube">

      <!-- Portoflio Section Heading -->
      <div class="section-heading text-upper">

         <h3>
            <?php the_field('portfolio_section_heading')?>
         </h3>

         <h2>
            <?php the_field('portfolio_section_heading')?>
         </h2>

      </div>

      <!-- Portfolio Cube ACF Varibales -->
      <?php
         // First Area
         $area1 = get_field('area_1');
         $image1 = wp_get_attachment_image_src($area1['area_image'], 'square')[0];

         //Second Area
         $area2 = get_field('area_2');
         $image2 = wp_get_attachment_image_src($area2['area_image'], 'square')[0];

         //Third Area
         $area3 = get_field('area_3');
         $image3 = wp_get_attachment_image_src($area3['area_image'], 'square')[0];

         //Fourth Area
         $area4 = get_field('area_4');
         $image4 = wp_get_attachment_image_src($area4['area_image'], 'square')[0];

         //Fifth Area
         $area5 = get_field('area_5');
         $image5 = wp_get_attachment_image_src($area5['area_image'], 'square')[0];

         //Sixth Area
         $area6 = get_field('area_6');
         $image6 = wp_get_attachment_image_src($area6['area_image'], 'square')[0];
      ?>

      <!-- push the PHP Variables into Javascript Variables -->
      <script>
         const area1 ='<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image1 ?>"/><p class="area-description"><?php echo $area1['area_name'] ?></p></a>';
         const area2 ='<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image2 ?>"/><p class="area-description"><?php echo $area2['area_name'] ?></p></a>';
         const area3 ='<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image3 ?>"/><p class="area-description"><?php echo $area3['area_name'] ?></p></a>';
         const area4 ='<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image4 ?>"/><p class="area-description"><?php echo $area4['area_name'] ?></p></a>';
         const area5 ='<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image5 ?>"/><p class="area-description"><?php echo $area5['area_name'] ?></p></a>';
         const area6 ='<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image6 ?>"/><p class="area-description"><?php echo $area6['area_name'] ?></p></a>';
      </script>

      <!--Cube Visualisation-->
      <div id="my3Dsurface" class="js3dsurface" data-facewidth="450"></div>

      <!-- Button for the Projects Page -->
      <div class="button-container">
         
         <!-- Button with fill -->
         <a href="/projects" title="more projects" class="button button--fill">more projects</a>  
         
      </div>

   </section>
   
   <!-- Page Content Block -->
   <section>

      <!-- Content Render -->
      <?php the_content();?>
      
   </section>

</main>
<?php endwhile;?>

<!-- Get the footer function -->
<?php get_footer()?>