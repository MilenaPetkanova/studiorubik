<!-- Get the header function -->
<?php get_header() ?>

<!-- Main element -->
<main class="single-career-page">
<!--    Hero Section-->
    <section class="hero-section">

        <!--        Hero Image-->
        <div class="hero-section__image">
			<?php
			if ( has_post_thumbnail() ):
                //the_post_thumbnail( 'blog', array( 'class' => 'featured-image' ) );
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				echo '<div  style="background: url('. $url.')"></div>';
			else:
				echo '<h4 class="text-center">No feature image added</h4>';
			endif;
			?>
        </div>

        <!--        Codepen Demo-->



        <!--        Hero Content-->
        <div class="hero-section__content">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <p><?php get_template_part( 'template-parts/page', 'loop' ); ?></p>
            <a href="#" title="apply" class="button button--transparent-white">apply</a>
        </div>
    </section>

    <!-- Tasks Section -->
    <section class="tasks">

        <!-- Tasks Section Headings -->
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field( 'tasks_heading' ) ?></h2>
            <p class="background-text"><?php the_field( 'tasks_heading' ) ?></p>
        </div>

        <!-- About Us Section Content -->
        <div class="container">
            <div data-aos="fade-zoom-in" data-aos-delay="200" class="two-column-content">
                <p><?php the_field( 'tasks_content' ) ?></p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="tasks">

        <!-- Skills Section Headings -->
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field( 'skills_heading' ) ?></h2>
            <p class="background-text"><?php the_field( 'skills_heading' ) ?></p>
        </div>

        <!-- Skills Section Content -->
        <div class="container">
            <div data-aos="fade-zoom-in" data-aos-delay="200" class="two-column-content">
                <p><?php the_field( 'skills_content' ) ?></p>
            </div>
        </div>
    </section>

    <!-- We Offer Section -->
    <section class="tasks">

        <!-- We Offer Section Headings -->
        <div data-aos="fade-up" class="section-heading text-upper container">
            <h2><?php the_field( 'we_offer_heading' ) ?></h2>
            <p class="background-text"><?php the_field( 'we_offer_heading' ) ?></p>
        </div>

        <!-- Skills Section Content -->
        <div class="container">
            <div data-aos="fade-zoom-in" data-aos-delay="200" class="two-column-content">
                <p><?php the_field( 'we_offer_content' ) ?></p>
            </div>
        </div>

        <div class="container apply-button">
            <a data-aos="fade-up" href="#" title="apply" class="button button--fill">apply</a>
        </div>
    </section>
</main>

<!-- Get the footer function -->
<?php get_footer() ?>