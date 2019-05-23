<?php get_header(); ?>

<main id="home">
    <?php 
        require_once WP_CONTENT_DIR . '/themes/freyzein/page-parts/home-hero.php';
        require_once WP_CONTENT_DIR . '/themes/freyzein/page-parts/home-special.php';
        require_once WP_CONTENT_DIR . '/themes/freyzein/page-parts/home-blog.php';
    ?>
</main> 

<?php get_footer(); 