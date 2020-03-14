<?php

   /*
   Template Name: Front Page Template
   */

   get_header('front');
?>

<?php while (have_posts()): the_post();?>

   <!-- front-page.php Main element -->
   <main class="landing-page section">

      <!-- Hero Section -->
      <section  class="hero-section">

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
         <div data-aos="fade-up" class="section-heading text-upper">
            <h2><?php the_field('portfolio_section_heading')?></h2>
            <p class="background-text"><?php the_field('portfolio_section_heading')?></p>
         </div>

         <!-- Portfolio Section Text -->
         <div data-aos="fade-zoom-in" data-aos-delay="400" class="portfolio__text">
            <p><?php the_field('portfolio_section_text')?></p>
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
            const area1 =
               '<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image1 ?>"/><p class="area-description"><?php echo $area1['
            area_name '] ?></p></a>';
            const area2 =
               '<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image2 ?>"/><p class="area-description"><?php echo $area2['
            area_name '] ?></p></a>';
            const area3 =
               '<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image3 ?>"/><p class="area-description"><?php echo $area3['
            area_name '] ?></p></a>';
            const area4 =
               '<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image4 ?>"/><p class="area-description"><?php echo $area4['
            area_name '] ?></p></a>';
            const area5 =
               '<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image5 ?>"/><p class="area-description"><?php echo $area5['
            area_name '] ?></p></a>';
            const area6 =
               '<a href="https://studiorubik.com/phatbride_1.jpg" target="_blank"><img src="<?php echo $image6 ?>"/><p class="area-description"><?php echo $area6['
            area_name '] ?></p></a>';
         </script>

         <!--Cube Visualisation-->
         <div data-aos="zoom-out-up" data-aos-delay="500" data-aos-duration="1500" id="my3Dsurface" class="js3dsurface" data-facewidth="450"></div>

         <!-- Button for the Projects Page -->
         <div class="button-container">

            <!-- Button with fill -->
            <a data-aos="fade-up" data-aos-delay="300" href="/portfolio" title="more projects" class="button button--fill">more projects</a>

         </div>

      </section>

      <!-- Services Section -->
      <section class="expertise">

         <!-- Portoflio Section Headings -->
         <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('expertise_section_heading')?></h2>
            <p class="background-text"><?php the_field('expertise_section_heading')?></p>
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
               <li data-aos="fade-zoom-in" data-aos-delay="200"  class="workflow__list-item">
                  <p><?php echo $expertise_workflow['first_heading'] ?></p>
               </li>

               <!-- Divider -->
               <li data-aos="fade-zoom-in" data-aos-delay="300"  class="workflow__list-item svg-test"><img class="style-svg" alt="divider"
                     src="<?php echo $divider_icon ?>" /></li>

               <!-- Heading -->
               <li data-aos="fade-zoom-in" data-aos-delay="500"  class="workflow__list-item">
                  <p><?php echo $expertise_workflow['second_heading'] ?></p>
               </li>

               <!-- Divider -->
               <li data-aos="fade-zoom-in" data-aos-delay="700"  class="workflow__list-item"><img class="style-svg" alt="divider" src="<?php echo $divider_icon ?>" />
               </li>

               <!-- Heading -->
               <li data-aos="fade-zoom-in" data-aos-delay="900"  class="workflow__list-item">
                  <p><?php echo $expertise_workflow['third_heading'] ?></p>
               </li>

               <!-- Divider -->
               <li data-aos="fade-zoom-in" data-aos-delay="1100"  class="workflow__list-item"><img class="style-svg" alt="divider" src="<?php echo $divider_icon ?>" />
               </li>

               <!-- Heading -->
               <li data-aos="fade-zoom-in" data-aos-delay="1300"   class="workflow__list-item">
                  <p><?php echo $expertise_workflow['fourth_heading'] ?></p>
               </li>
            </ul>

         </div>

         <!-- Expertise Grid -->
         <div class="three-column__grid container text-center">

            <!-- Grid Item 1 -->
            <div data-aos="fade-up" data-aos-delay="400"  class="three-column__grid-item">

               <?php
                  $first_grid_item = get_field('first_grid_item');
                  $icon = wp_get_attachment_image_src($first_grid_item['grid_item_icon'], 'full')[0];
               ?>

               <!-- Grid Item Icon & Heading -->
               <figure>
                  <img class="style-svg" src="<?php echo $icon ?>" />
                  <figcaption>
                     <h5><?php echo $first_grid_item['grid_item_heading'] ?></h5>
                  </figcaption>
               </figure>

               <!-- Grid Item Description -->
               <div class="grid-item__description">
                  <p class="text-left"><?php echo $first_grid_item['gird_item_description'] ?></p>
               </div>

            </div>

            <!-- Grid Item 2 -->
            <div data-aos="fade-up" data-aos-delay="400"  class="three-column__grid-item">

               <?php
                  $second_grid_item = get_field('second_grid_item');
                  $icon = wp_get_attachment_image_src($second_grid_item['grid_item_icon'], 'full')[0];
               ?>

               <!-- Grid Item Icon & Heading -->
               <figure>
                  <img class="style-svg" src="<?php echo $icon ?>" />
                  <figcaption>
                     <h5><?php echo $second_grid_item['grid_item_heading'] ?></h5>
                  </figcaption>
               </figure>

               <!-- Grid Item Description -->
               <div class="grid-item__description">
                  <p class="text-left"><?php echo $second_grid_item['gird_item_description'] ?></p>
               </div>

            </div>

            <!-- Grid Item 3 -->
            <div data-aos="fade-up" data-aos-delay="400"  class="three-column__grid-item">

               <?php
                  $third_grid_item = get_field('third_grid_item');
                  $icon = wp_get_attachment_image_src($third_grid_item['grid_item_icon'], 'full')[0];
               ?>

               <!-- Grid Item Icon & Heading -->
               <figure>
                  <img class="style-svg" src="<?php echo $icon ?>" />
                  <figcaption>
                     <h5><?php echo $third_grid_item['grid_item_heading'] ?></h5>
                  </figcaption>
               </figure>

               <!-- Grid Item Description -->
               <div class="grid-item__description">
                  <p class="text-left"><?php echo $third_grid_item['gird_item_description'] ?></p>
               </div>

            </div>

            <!-- Grid Item 4 -->
            <div data-aos="fade-up" data-aos-delay="500"  class="three-column__grid-item">

               <?php
                  $fourth_grid_item = get_field('fourth_grid_item');
                  $icon = wp_get_attachment_image_src($fourth_grid_item['grid_item_icon'], 'full')[0];
               ?>

               <!-- Grid Item Icon & Heading -->
               <figure>
                  <img class="style-svg" src="<?php echo $icon ?>" />
                  <figcaption>
                     <h5><?php echo $fourth_grid_item['grid_item_heading'] ?></h5>
                  </figcaption>
               </figure>

               <!-- Grid Item Description -->
               <div class="grid-item__description">
                  <p class="text-left"><?php echo $fourth_grid_item['gird_item_description'] ?></p>
               </div>

            </div>

            <!-- Grid Item 5 -->
            <div data-aos="fade-up" data-aos-delay="500"  class="three-column__grid-item">

               <?php
                  $fifth_grid_item = get_field('fifth_grid_item');
                  $icon = wp_get_attachment_image_src($fifth_grid_item['grid_item_icon'], 'full')[0];
               ?>

               <!-- Grid Item Icon & Heading -->
               <figure>
                  <img class="style-svg" src="<?php echo $icon ?>" />
                  <figcaption>
                     <h5><?php echo $fifth_grid_item['grid_item_heading'] ?></h5>
                  </figcaption>
               </figure>

               <!-- Grid Item Description -->
               <div class="grid-item__description">
                  <p class="text-left"><?php echo $fifth_grid_item['gird_item_description'] ?></p>
               </div>

            </div>

            <!-- Grid Item 6 -->
            <div data-aos="fade-up" data-aos-delay="500"  class="three-column__grid-item">

               <?php
                  $sixth_grid_item = get_field('sixth_grid_item');
                  $icon = wp_get_attachment_image_src($sixth_grid_item['grid_item_icon'], 'full')[0];
               ?>

               <!-- Grid Item Icon & Heading -->
               <figure>
                  <img class="style-svg" src="<?php echo $icon ?>" />
                  <figcaption>
                     <h5><?php echo $sixth_grid_item['grid_item_heading'] ?></h5>
                  </figcaption>
               </figure>

               <!-- Grid Item Description -->
               <div class="grid-item__description">
                  <p class="text-left"><?php echo $sixth_grid_item['gird_item_description'] ?></p>
               </div>

            </div>

         </div>

      </section>

      <!-- First Parallax -->
      <section class="parallax">

         <!-- Slider Revolution First Parallax ACF -->
         <?php
            if (get_field('parallax_shortcode')) {
               echo do_shortcode(get_field('parallax_shortcode'));
            }
         ?>
      </section>

      <!-- Clients Section -->
      <section class="clients">

         <!-- Clients Section Headings -->
         <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field('clients_section_heading')?></h2>
            <p class="background-text"><?php the_field('clients_section_heading')?></p>
         </div>

         <div class="container">
            <!-- Clients Section Content -->
            <div data-aos="fade-zoom-in" data-aos-delay="100" class="two-column-content container">
               <p><?php the_field('clients_section_text_area')?></p>
            </div>
         </div>

         <!-- Clients Grid -->
         <div data-aos="fade-up" class="clients__grid container">

            <!-- Grid Item 1 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 2 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_2'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 3 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_3'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 4 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_4'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 5 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_5'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 6 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_6'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 7 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_7'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 8 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_8'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>
            <!-- Grid Item 9 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_9'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 10 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_10'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 11 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_11'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 12 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_12'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 13 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_13'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>

            <!-- Grid Item 14 -->
            <div class="clients__grid-item">

               <?php
                  $clients_grid = get_field('clients_grid');
                  $logo = wp_get_attachment_image_src($clients_grid['client_image_14'], 'full')[0];
               ?>

               <!-- Grid ItemImage -->
               <figure>
                  <img class="" src="<?php echo $logo ?>" />
                  <a href="#">
                     <h5 class="text-upper text-center">see <br> projects</h5>
                  </a>
               </figure>

            </div>
         </div>

         <!-- Button for the Clients Page -->
         <div class="button-container container">

            <!-- Button with fill -->
            <a data-aos="fade-up" data-aos-delay="300" href="/clients" title="all clients" class="button button--fill">all clients</a>
         </div>
      </section>

      <!-- Second Parallax -->
      <section class="parallax">

         <!-- Slider Revolution Second Parallax ACF -->
         <?php
            if (get_field('parallax_shortcode_2')) {
               echo do_shortcode(get_field('parallax_shortcode_2'));
            }
         ?>

      </section>

      <!-- Testimonials Section -->
      <section class="testimonials container">

         <!-- Testemonials Section Headings -->
         <div data-aos="fade-up" class="section-heading text-upper">
            <h2><?php the_field('testimonials_section_heading')?></h2>
            <p class="background-text"><?php the_field('testimonials_section_heading')?></p>
         </div>

         <!-- Testimonials Container -->
         <ul class="testimonials-list">

            <?php
               // Query the Testimonaials
               $args = array(
                  'post_type' => 'testimonials',
                  'posts_per_page' => 10
               );
               $testimonials = new WP_Query($args);
               while($testimonials->have_posts()): $testimonials->the_post();
            ?>

            <!-- Single Testimonial render -->
            <li data-aos="fade-up" class="slide testimonial text-center">

               <blockquote>
                  <?php the_content(); ?>
               </blockquote>

               <footer class="testimonial-footer">
                  <?php the_post_thumbnail('thumbnail') ?>
                  <h3 class="text-upper"><?php the_title(); ?></h3>
                  <a href="#" title="see project" class="button button--fill">see project</a>
               </footer>

            </li>

            <?php endwhile; wp_reset_postdata(); ?>
         </ul>

      </section>

      <!-- Page Content Block -->
      <section>

         <!-- Content Render -->
         <?php the_content(); ?>

      </section>

   </main>
<?php endwhile;?>

<!-- Get the footer function -->
<?php get_footer(); ?>