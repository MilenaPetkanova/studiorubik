<?php

//  Get the header function
get_header()?>

    <!-- Main element -->
    <main class="inner-page">

        <!-- This template part gets blog-loop.php from the template-parts folder and inserts it in the given page -->
		<?php get_template_part('template-parts/page','loop'); ?>
        <p>Hello from index.php</p>

    </main>



    <!-- Get the footer function -->
<?php get_footer() ?>