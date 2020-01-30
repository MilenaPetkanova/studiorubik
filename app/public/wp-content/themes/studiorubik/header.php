<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <!-- Site Header -->
    <header class="site-header">

        <!-- Get the Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri() . "/img/header-logo.svg"; ?>" alt="logo">
        </a>

        <!-- Toggle the Burger Menu -->
        <div id="toggle"><span></span></div>

        <!-- Call the navigation -->
        <?php
        $args = array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-menu text-upper',
            'container_id' => 'main-menu'
        );
        wp_nav_menu($args);
        ?>

    </header>