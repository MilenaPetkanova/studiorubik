<?php get_header() ?>

    <!-- Main element -->
    <main class="inner-page">

        <section class="hero-section">

			<?php
			if ( has_post_thumbnail() ):
				the_post_thumbnail( 'blog', array( 'class' => 'featured-image' ) );
			else:
				echo '<h4 class="text-center">No feature image added</h4>';
			endif;
			?>

            <h1>Hello From Page.php</h1>
        </section>

        <!-- This template part gets blog-loop.php from the template-parts folder and inserts it in the given page -->
		<?php get_template_part( 'template-parts/page', 'loop' ); ?>

        <h1 data-aos="fade-up" class="entry-title"><?php the_title(); ?></h1>
    </main>

<?php get_footer() ?>