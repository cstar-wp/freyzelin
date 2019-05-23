<?php get_header(); ?>

<?php 
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); 
            // Post Content here
        endwhile;
    endif;
?>

<?php get_footer();