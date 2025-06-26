<?php
add_action('wp_enqueue_scripts', 'foce_enqueue_assets');
function foce_enqueue_assets() {
    // Style parent
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // CSS principal
    wp_enqueue_style(
        'foce-main-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array('parent-style'),
        wp_get_theme()->get('Version')
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css',
        array(),
        '11.2.8'
    );

    // Swiper Element (local)
    wp_enqueue_script(
        'swiper-element',
        get_stylesheet_directory_uri() . '/assets/js/swiper-element-bundle.min.js',
        array(),
        '11.2.8',
        true
    );


    // Skrollr
    wp_enqueue_script(
        'skrollr',
        get_stylesheet_directory_uri() . '/assets/js/skrollr.min.js',
        array(),
        '0.6.30',
        true
    );

    // JS d'animation
    wp_enqueue_script(
        'foce-animation-init',
        get_stylesheet_directory_uri() . '/js/animation-init.js',
        array('swiper-element', 'skrollr'),
        wp_get_theme()->get('Version'),
        true
    );


    // JS scroll
    wp_enqueue_script(
        'foce-scroll',
        get_stylesheet_directory_uri() . '/js/scroll.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    

}


// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

