<?php 
function remove_fonts_script () {
remove_action( 'wp_enqueue_scripts', 'ashe_gfonts_scripts' );
}
add_action( 'wp_enqueue_scripts', 'remove_fonts_script', 1 );


add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );
 





 