<?php while (have_posts()): the_post(); ?>

    <!-- Display The Content -->
    <div>
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>