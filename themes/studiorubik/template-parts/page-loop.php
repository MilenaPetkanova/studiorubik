<?php while ( have_posts() ): the_post(); ?>

    <!-- <?php
	if ( has_post_thumbnail() ):
		the_post_thumbnail( 'blog', array( 'class' => 'featured-image' ) );
// else:
//     echo '<h4 class="text-center">No feature image added</h4>';
	endif; ?> -->

    <!-- Display The Content -->
    <div>
		<?php the_content(); ?>
    </div>

<?php endwhile; ?>