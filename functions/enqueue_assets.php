<?php

function _themename_assets() {
    # wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    # main css bundle
    wp_enqueue_style( '_themename-main', get_template_directory_uri() . '/dist/css/bundle.css', [], null);

    
    # wp_enqueue_script($handle, $src, $deps, $ver, $in_footer)
    # main js bundle
    wp_enqueue_script( '_themename-main-js', get_template_directory_uri() . '/dist/js/bundle.js', [], null);  
    

    # BOOTSTRAP 4
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', [], null);
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', [], null);  
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', [], null);  
}

// add_action('wp_enqueue_scripts', '_themename_assets');
_themename_assets(); 