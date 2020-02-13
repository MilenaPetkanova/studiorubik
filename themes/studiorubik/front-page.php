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

      <!-- Portoflio Section Headings -->
      <div class="section-heading text-upper">

         <h3><?php the_field('portfolio_section_heading')?></h3>
         <h2><?php the_field('portfolio_section_heading')?></h2>

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

      <!-- Push images from ACF into Javascript Variables -->
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

   <!-- Expertise Section -->
   <section class="expertise">

      <!-- Portoflio Section Headings -->
      <div class="section-heading text-upper container">

         <h3><?php the_field('expertise_section_heading')?></h3>
         <h2><?php the_field('expertise_section_heading')?></h2>

      </div>
      
      <!-- Workflow Headings -->
      <div class="expertise__workflow">
        
         <!-- Get the Expertise Field and register the SVG Divider -->
         <?php
            $expertise_workflow = get_field('expertise_workflow');
            $divider_icon = wp_get_attachment_image_src($expertise_workflow['svg_divider'], 'full')[0];
         ?>

         <!-- Expertise Heading List -->
         <ul class="workflow__list text-upper">

            <!-- Heading -->
            <li class="workflow__list-item"><h4><?php echo $expertise_workflow['first_heading'] ?></h4></li>

            <!-- Divider -->
            <li class="workflow__list-item svg-test"><img class="style-svg" alt="divider" src="<?php echo $divider_icon ?>" /></li>

            <!-- Heading -->
            <li class="workflow__list-item"><h4><?php echo $expertise_workflow['second_heading'] ?></h4></li>

            <!-- Divider -->
            <li class="workflow__list-item"><img class="style-svg" alt="divider" src="<?php echo $divider_icon ?>" /></li>

            <!-- Heading -->
            <li class="workflow__list-item"><h4><?php echo $expertise_workflow['third_heading'] ?></h4></li>

            <!-- Divider -->
            <li class="workflow__list-item"><img class="style-svg" alt="divider" src="<?php echo $divider_icon ?>" /></li>
            
            <!-- Heading -->
            <li class="workflow__list-item"><h4><?php echo $expertise_workflow['fourth_heading'] ?></h4></li>
         </ul>
         
      </div>
      
      <!-- Expertise Grid -->
      <div class="expertise__grid container">

         <!-- Grid Item 1 -->
         <div class="expertise__grid-item-1">

            <?php
               $first_grid_item = get_field('first_grid_item');
               $icon = wp_get_attachment_image_src($first_grid_item['grid_item_icon'], 'full')[0];
            ?>

            <!-- Grid Item Icon & Heading -->
            <figure>
               <img class="style-svg" src="<?php echo $icon ?>"/>
               <figcaption>
                  <h5><?php echo $first_grid_item['grid_item_heading'] ?></h5>
               </figcaption>
            </figure>

            <!-- Grid Item Description -->
            <div class="grid-item__description">
               <p><?php echo $first_grid_item['gird_item_description'] ?></p>
            </div>

         </div>

         <!-- Grid Item 2 -->
         <div class="expertise__grid-item-2">

            <?php
               $second_grid_item = get_field('second_grid_item');
               $icon = wp_get_attachment_image_src($second_grid_item['grid_item_icon'], 'full')[0];
            ?>

            <!-- Grid Item Icon & Heading -->
            <figure>
               <img class="style-svg" src="<?php echo $icon ?>"/>
               <figcaption>
                  <h5><?php echo $second_grid_item['grid_item_heading'] ?></h5>
               </figcaption>
            </figure>

            <!-- Grid Item Description -->
            <div class="grid-item__description">
               <p><?php echo $second_grid_item['gird_item_description'] ?></p>
            </div>

         </div>

         <!-- Grid Item 3 -->
         <div class="expertise__grid-item-3">

            <?php
               $third_grid_item = get_field('third_grid_item');
               $icon = wp_get_attachment_image_src($third_grid_item['grid_item_icon'], 'full')[0];
            ?>

            <!-- Grid Item Icon & Heading -->
            <figure>
               <img class="style-svg" src="<?php echo $icon ?>"/>
               <figcaption>
                  <h5><?php echo $third_grid_item['grid_item_heading'] ?></h5>
               </figcaption>
            </figure>

            <!-- Grid Item Description -->
            <div class="grid-item__description">
               <p><?php echo $third_grid_item['gird_item_description'] ?></p>
            </div>

         </div>

         <!-- Grid Item 4 -->
         <div class="expertise__grid-item-4">

            <?php
               $fourth_grid_item = get_field('fourth_grid_item');
               $icon = wp_get_attachment_image_src($fourth_grid_item['grid_item_icon'], 'full')[0];
            ?>

            <!-- Grid Item Icon & Heading -->
            <figure>
               <img class="style-svg"  src="<?php echo $icon ?>"/>
               <figcaption>
                  <h5><?php echo $fourth_grid_item['grid_item_heading'] ?></h5>
               </figcaption>
            </figure>

            <!-- Grid Item Description -->
            <div class="grid-item__description">
               <p><?php echo $fourth_grid_item['gird_item_description'] ?></p>
            </div>

         </div>

          <!-- Grid Item 5 -->
         <div class="expertise__grid-item-5">

            <?php
               $fifth_grid_item = get_field('fifth_grid_item');
               $icon = wp_get_attachment_image_src($fifth_grid_item['grid_item_icon'], 'full')[0];
            ?>

            <!-- Grid Item Icon & Heading -->
            <figure>
               <img class="style-svg"  src="<?php echo $icon ?>"/>
               <figcaption>
                  <h5><?php echo $fifth_grid_item['grid_item_heading'] ?></h5>
               </figcaption>
            </figure>

            <!-- Grid Item Description -->
            <div class="grid-item__description">
               <p><?php echo $fifth_grid_item['gird_item_description'] ?></p>
            </div>

         </div>

          <!-- Grid Item 6 -->
         <div class="expertise__grid-item-6">

            <?php
               $sixth_grid_item = get_field('sixth_grid_item');
               $icon = wp_get_attachment_image_src($sixth_grid_item['grid_item_icon'], 'full')[0];
            ?>

            <!-- Grid Item Icon & Heading -->
            <figure>
               <img class="style-svg"  src="<?php echo $icon ?>"/>
               <figcaption>
                  <h5><?php echo $sixth_grid_item['grid_item_heading'] ?></h5>
               </figcaption>
            </figure>

            <!-- Grid Item Description -->
            <div class="grid-item__description">
               <p><?php echo $sixth_grid_item['gird_item_description'] ?></p>
            </div>

         </div>
         




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