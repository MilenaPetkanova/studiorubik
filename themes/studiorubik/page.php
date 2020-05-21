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

    <!--SmoothScroll-->
    <section>
        <div data-scroll>

            <div class="smooth-scroll-content">

                <div class="item">
                    <div class="item__img-wrap">
                        <div class="item__img item__img--t1"></div>
                    </div>
                    <div class="item__caption">
                        <h2 class="item__caption-title">Central view</h2>
                        <p class="item__caption-copy">Great turbulent clouds emerged into consciousness citizens.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="item__img-wrap">
                        <div class="item__img item__img--t2"></div>
                    </div>
                    <div class="item__caption">
                        <h2 class="item__caption-title">Lost in time</h2>
                        <p class="item__caption-copy">Brain is the seed of intelligence the sky calls to us a very small
                            stage.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="item__img-wrap">
                        <div class="item__img item__img--t3"></div>
                    </div>
                    <div class="item__caption">
                        <h2 class="item__caption-title">Ready to land</h2>
                        <p class="item__caption-copy">Cosmos encyclopaedia galactica a billion trillion culture cosmic
                            ocean.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="item__img-wrap">
                        <div class="item__img item__img--t1"></div>
                    </div>
                    <div class="item__caption">
                        <h2 class="item__caption-title">All equal</h2>
                        <p class="item__caption-copy">Network of wormholes dream of the mind's eye finite but unbounded
                            concept.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="item__img-wrap">
                        <div class="item__img item__img--t2"></div>
                    </div>
                    <div class="item__caption">
                        <h2 class="item__caption-title">Connections</h2>
                        <p class="item__caption-copy">Two ghostly white figures in coveralls and helmets are softly
                            dancing vastness.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="item__img-wrap">
                        <div class="item__img item__img--t3"></div>
                    </div>
                    <div class="item__caption">
                        <h2 class="item__caption-title">The state of divergence</h2>
                        <p class="item__caption-copy">Vastness is bearable only through love invent the universe
                            vanquish.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="item__img-wrap">
                        <div class="item__img item__img--t1"></div>
                    </div>
                    <div class="item__caption">
                        <h2 class="item__caption-title">Open perspective</h2>
                        <p class="item__caption-copy">The only home we've ever known concept of the number one.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="item__img-wrap">
                        <div class="item__img item__img--t3"></div>
                    </div>
                    <div class="item__caption">
                        <h2 class="item__caption-title">Discovery of shapes</h2>
                        <p class="item__caption-copy">Decipherment explorations tesseract as a patch of light.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="item__img-wrap">
                        <div class="item__img item__img--t2"></div>
                    </div>
                    <div class="item__caption">
                        <h2 class="item__caption-title">The Observer</h2>
                        <p class="item__caption-copy">Astonishment muse about dispassionate extraterrestrial
                            observer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>