<?php

/*
Template Name: Contact Page
*/

get_header();

?>

    <!-- Main element -->
    <main class="inner-page contacts">
        <section class="hero-section">

			<?php
			if ( has_post_thumbnail() ):
				the_post_thumbnail( 'blog', array( 'class' => 'featured-image' ) );
			else:
				echo '<h4 class="text-center">No feature image added</h4>';
			endif;
			?>

            <div class="hero-section__content container">
                <p><?php the_field( 'hero_text' ) ?></p>
            </div>
        </section>

        <section class="cf contacts-section">

            <div class="col-2 content">

                <!-- Clients Section Headings -->
                <div data-aos="fade-up" class="section-heading text-upper">
                    <h2><?php the_title(); ?></h2>
                    <p class="background-text"><?php the_title(); ?></p>
                </div>

                <p data-aos="fade-zoom-in"
                   data-aos-delay="300"><?php get_template_part( 'template-parts/page', 'loop' ); ?>
                </p>

                <p data-aos="fade-zoom-in" data-aos-delay="300">
                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="104.5168" height="115.5266" viewBox="0 0 104.5168 115.5266">
                            <title>footer-logo.svg</title>
                            <path
                                    d="M69.6451,71.417C69.4724,71.5187,52.1,81.06,52.1,81.06s-17.54-9.5249-17.6338-9.5765c.0909-.053,17.5843-10.0383,17.5843-10.0383S69.49,71.3264,69.6451,71.417Z"
                                    fill="#c3c1c6" fill-rule="evenodd"/>
                            <path
                                    d="M51.6992,20.0759c0,.1125-16.9831,9.4958-16.9831,9.4958V10.2375C34.7161,10.1523,51.31.2459,51.7622,0"
                                    fill-rule="evenodd"/>
                            <path
                                    d="M69.2244,29.9231c-.5472-.3155-15.6741-9.1523-16.8415-9.8806,0,0-.0029-19.0526.0105-20.0118,1.0456.6184,15.8511,9.3518,16.89,10.0179"
                                    fill-rule="evenodd"/>
                            <path d="M87.185,80.4026c-.0973-.0564.38-19.7722.3166-19.6626l16.76,9.64.2557,19.9894"
                                  fill-rule="evenodd"/>
                            <path
                                    d="M69.9885,90.7287c.5463-.3173,15.748-9.0237,16.962-9.6721,0,0,16.5168,9.4966,17.3413,9.9865-1.0571.5981-16.0094,9.0775-17.1053,9.6461"
                                    fill-rule="evenodd"/>
                            <polyline points="17.332 80.403 17.015 60.74 0.256 70.38 0 90.369" fill-rule="evenodd"/>
                            <path
                                    d="M34.5285,90.7287c-.5463-.3173-15.7482-9.0237-16.9622-9.6721,0,0-16.5166,9.4966-17.3411,9.9865,1.0571.5981,16.0094,9.0775,17.1054,9.6461"
                                    fill-rule="evenodd"/>
                            <path
                                    d="M51.5943,40.6179c.001.0842-17.559,9.8264-17.559,9.8264l.03,20.2487c.5009-.2777,17.012-9.8153,17.5189-10.152C51.5905,60.1364,51.5953,40.7021,51.5943,40.6179Z"
                                    fill="#232323" fill-rule="evenodd"/>
                            <path
                                    d="M52.4539,40.6179c-.001.0842,17.5586,9.8264,17.5586,9.8264l-.03,20.2487c-.5013-.2777-17.0124-9.8153-17.5189-10.152C52.4577,60.1364,52.4529,40.7021,52.4539,40.6179Z"
                                    fill="#8b8a8d" fill-rule="evenodd"/>
                            <path
                                    d="M23.9719,115.5266a9.6718,9.6718,0,0,1-2.2109-.2706v-.8476c.4053.0371,1.3633.1728,2.1743.1728,1.1543,0,1.4492-.3193,1.4492-.9091,0-.6026-.209-.7862-1.3633-1.2774l-.4917-.209c-1.3017-.5527-1.8545-1.1054-1.8545-2.0761,0-1.13.7491-1.6827,2.4444-1.6827a8.0994,8.0994,0,0,1,2.039.2452v.8232c-.7124-.0732-1.5234-.123-1.99-.123-.9829,0-1.3882.123-1.3882.7373,0,.5283.2212.749,1.1792,1.167l.4912.2089c1.5723.7,2.0391,1.1182,2.0391,2.1621C26.49,114.6174,25.9744,115.5266,23.9719,115.5266Z"/>
                            <path
                                    d="M30.0134,115.5266c-1.2285,0-1.6709-.4424-1.6709-1.72V109.52l-1.3633-.0976v-.8233h1.3633V106.842H29.448v1.7568h1.8057v.9209H29.448v4.2383c0,.7617.0615.8838.688.8838.3808,0,.9092-.0361,1.1177-.0606v.7608A4.6285,4.6285,0,0,1,30.0134,115.5266Z"/>
                            <path
                                    d="M36.5833,115.3547v-.5283a5.3276,5.3276,0,0,1-2.3462.7c-1.67,0-2.002-1.1543-2.002-2.6163v-4.3115h1.0933V112.91c0,1.2286.1963,1.6709,1.1421,1.6709a5.7078,5.7078,0,0,0,2.1128-.6025v-5.38h1.1054v6.7559Z"/>
                            <path
                                    d="M43.41,115.3547v-.3438a3.7135,3.7135,0,0,1-1.8916.5157c-1.585,0-2.5181-.8965-2.5181-2.8868v-1.167c0-2.42,1.2159-3.0459,2.7881-3.0459a7.7412,7.7412,0,0,1,1.5845.1719v-2.751h1.1055v9.5069Zm-.0371-5.835a9.8155,9.8155,0,0,0-1.5107-.1592c-1.0933,0-1.7564.3067-1.7564,2.1123v1.167c0,1.3389.4912,1.9414,1.6211,1.9414a3.72,3.72,0,0,0,1.646-.4179Z"/>
                            <path d="M46.134,107.3459v-1.4981h1.1177v1.4981Zm0,8.0088v-6.7559H47.24v6.7559Z"/>
                            <path
                                    d="M51.5012,115.5266c-1.8916,0-2.874-1.0928-2.874-3.0586v-.9825c0-1.9658.9824-3.0586,2.874-3.0586,1.9038,0,2.8867,1.0928,2.8867,3.0586v.9825C54.3879,114.4338,53.405,115.5266,51.5012,115.5266Zm1.7813-4.0411c0-1.4619-.5406-2.0879-1.7813-2.0879-1.2158,0-1.7685.626-1.7685,2.0879v.9825c0,1.4619.5405,2.0878,1.7685,2.0878,1.2407,0,1.7813-.6259,1.7813-2.0878Z"/>
                            <path
                                    d="M56.7927,109.9865v5.3682H55.7v-6.7559h1.081v.54a3.7883,3.7883,0,0,1,2.4072-.712v.9825A4.9981,4.9981,0,0,0,56.7927,109.9865Z"
                                    fill="#000"/>
                            <path
                                    d="M64.3328,115.3547v-.5283a5.3272,5.3272,0,0,1-2.3462.7c-1.67,0-2.002-1.1543-2.002-2.6163v-4.3115h1.0933V112.91c0,1.2286.1963,1.6709,1.1421,1.6709a5.7078,5.7078,0,0,0,2.1128-.6025v-5.38h1.1054v6.7559Z"
                                    fill="#000"/>
                            <path
                                    d="M69.5017,115.5266a20,20,0,0,1-2.4814-.1719v-9.5069h1.1054v3.0088a3.8338,3.8338,0,0,1,1.8179-.4541c1.7441,0,2.5552.9209,2.5552,2.8741v1.1542C72.4988,114.593,71.5037,115.5266,69.5017,115.5266Zm1.8916-4.2627c0-1.3633-.43-1.8916-1.585-1.8916a3.91,3.91,0,0,0-1.6826.3564v4.7539c.3072.0244.7984.0615,1.4.0615,1.2652,0,1.8672-.5156,1.8672-2.125Z"
                                    fill="#000"/>
                            <path d="M73.884,107.3459v-1.4981h1.1177v1.4981Zm0,8.0088v-6.7559H74.99v6.7559Z" fill="#000"/>
                            <path
                                    d="M80.467,115.3547l-2.727-3.3535v3.3535H76.6467v-9.5069H77.74v5.7969l2.7143-3.0459H81.88l-2.9238,3.2061,2.9727,3.55Z"
                                    fill="#000"/>
                        </svg>
                    </div>
                </p>
            </div>

            <div class="col-2 content">
                <?php echo do_shortcode('[contact-form-7 id="54" title="Contact"]'); ?>
            </div>
        </section>

        <section class="map-section">

            <!-- Google Maps  -->
            <div class="map-container">
                <?php echo do_shortcode('[resmap address="Sofia Fabrika 126, bul Maria Luiza 126" style="2" zoom="14" height="300px" key="AIzaSyA6d0WAlGXpG9XRGySXBMk8ojaqvnYhqqQ"]') ?>
            </div>

        </section>
    </main>

    <!-- Get the footer function -->
<?php get_footer( 'contact' ); ?>