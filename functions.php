<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

wp_enqueue_style(
    'foce-main-style',
    get_stylesheet_directory_uri() . '/assets/css/main.css',
    array('parent-style'),
    wp_get_theme()->get('Version')
);

// JavaScript
    wp_enqueue_script(
        'foce-main-script',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(), // tu peux mettre array('jquery') si besoin
        wp_get_theme()->get('Version'),
        true // chargement dans le footer
    );

}


// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}