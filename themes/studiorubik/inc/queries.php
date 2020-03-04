<?php function studiorubik_clients_list($number = -1) { ?>

    <div class="clients__grid container">
        <?php
            $args = array(
                'post_type' => 'studiorubik_clients',
                'posts_per_page' => $number,
            );

            //Use WP_Query and append the results into $clients
            $clients = new WP_Query($args);
            while ($clients->have_posts()): $clients->the_post(); ?>

	            <!-- List Items for Classes Posts / Individual Classes -->
	            <div class="clients__grid-item">

					<figure>
						<!-- Get Client Post Image Thumbnail -->
	                	<?php the_post_thumbnail('mediumSize');?>
						<a href="<?php the_permalink();?>">
							<h5><?php the_title();?></h5>
						</a>
					</figure>

	            </div>

            <?php endwhile; wp_reset_postdata();
        ?>
    </div>
<?php }
