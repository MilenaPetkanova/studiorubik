<footer class="site-footer container">

    <?php
        $args = array(
            'theme_location' => 'social-menu',
            'container' => 'div',
            'container_class' => 'footer-social-menu',
        );
        wp_nav_menu($args);
    ?>

</footer>

<?php wp_footer(); ?>

</body>
</html>