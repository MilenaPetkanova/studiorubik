<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Call the page Loader -->
    <?php get_template_part('template-parts/page', 'loader'); ?>

    <!-- Site Header -->
    <header class="site-header container inner-page-header">

        <!-- Get the Logo -->
        <a id="header-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri() . "/img/header-logo.svg"; ?>" alt="logo">
        </a>

        <div id="toggle" class="hamburger hamburger--spin">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>

        <!-- Burger Menu Container -->
        <nav class="text-upper" id="burger-menu-container">

            <!-- Call the Navigation Menu -->
            <?php
                $args = array(
                    'theme_location' => 'main-menu',
                    'container' => 'div',
                    'container_class' => 'main-menu text-right'
                );
                wp_nav_menu($args);
            ?>

            <div class="nav-contacts text-left">

                <div class="">
                    <p>Address</p>

                    <span>
                        <p>Bulevard "Knyaginya Maria Luiza" 126,</p>
                    </span>

                    <span>
                        <p>1233 Orlandovtsi, Sofia</p>
                    </span>

                </div>

                <div class="">

                    <p>contacts</p>

                    <span>
                        <p>
                            <a href="mailto:ask@studiorubik.com">ask@studiorubik.com</a>
                        </p>
                    </span>

                    <span>
                        <p>
                            <a href="tel:+359123456">+359 123 456</a>
                        </p>
                    </span>

                </div>

                <!-- Call the social menu -->
                <?php
                $args = array(
                    'theme_location' => 'social-menu',
                    'container' => 'div',
                    'container_id' => 'social-menu',
                    'container_class' => 'social-menu',
                    'link_before' => '<span class="hidden">',
                    'link_after' => '</span>',
                );
                wp_nav_menu($args);
            ?>

            </div>
            </div>
    </header>


