<footer class="site-footer container">

    <?php
        $args = array(
            'theme_location' => 'social-menu',
            'container' => 'div',
            'container_class' => 'social-menu',
            'link_before' => '<span class="hidden">',
            'link_after' => '</span>',
        );
        wp_nav_menu($args);
    ?>

    <section class="site-footer__cta">
        <!-- TO DO -->
    </section>

    <section class="site-footer__menu">

    <ul class="site-footer__menu__logo"></ul>
    <ul class="site-footer__menu__services"></ul>
    <ul class="site-footer__menu__the-studio"></ul>
    <ul class="site-footer__menu__the-studio"></ul>
    <ul></ul>
    <ul></ul>

    </section>

</footer>

<?php wp_footer(); ?>

</body>

</html>