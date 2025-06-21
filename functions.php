<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // CSS
    wp_enqueue_style(
        'foce-main-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array('parent-style'),
        wp_get_theme()->get('Version')
    );

    // JavaScript
    wp_enqueue_script(
        'foce-animation-init',
        get_stylesheet_directory_uri() . '/js/animation-init.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'foce-scroll',
        get_stylesheet_directory_uri() . '/js/scroll.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );


    // GSAP + ScrollTrigger
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
        array(),
        '3.12.2',
        true
    );

    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js',
        array('gsap'),
        '3.12.2',
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

