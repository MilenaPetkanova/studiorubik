<?php function studiorubik_clients_list( $number = - 1 ) { ?>

    <div data-aos="fade-zoom-in" data-aos-delay="200" class="clients__grid container">
		<?php
		$args = array(
			'post_type'      => 'studiorubik_clients',
			'posts_per_page' => $number,
		);

		//Use WP_Query and append the results into $clients
		$clients = new WP_Query( $args );
		while ( $clients->have_posts() ): $clients->the_post(); ?>

            <!-- List Items for Classes Posts / Individual Classes -->
            <div class="clients__grid-item">

                <figure>

                    <!-- Get Client Post Image Thumbnail -->
					<?php the_post_thumbnail( 'mediumSize' ); ?>
                    <a class="text-center text-upper" href="<?php the_permalink(); ?>">
                        <h5>See <br> Projects</h5>
                    </a>
                </figure>
            </div>
		<?php endwhile;
		wp_reset_postdata(); ?>
    </div>

<?php }

function studiorubik_careers_list( $number = - 1 ) { ?>

    <div data-aos="fade-up" class="careers__grid container">
		<?php
		$args = array(
			'post_type'      => 'studiorubik_careers',
			'posts_per_page' => $number,
		);

		//Use WP_Query and append the results into $clients
		$careers = new WP_Query( $args );
		while ( $careers->have_posts() ): $careers->the_post(); ?>

            <!-- List Items for Classes Posts / Individual Classes -->
            <div class="careers__grid-item">
                <!-- Display The Title -->
                <a class="text-center text-upper heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <a class="button button--transparent-white careers-button" title="apply" href="<?php the_permalink(); ?>">apply</a>
            </div>
		<?php endwhile;
		wp_reset_postdata(); ?>
    </div>
<?php }