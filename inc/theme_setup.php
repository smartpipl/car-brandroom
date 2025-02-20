<?php

add_action('after_setup_theme', 'cbr_setup');
function cbr_setup()
{
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]
    );
}


add_action('wp_enqueue_scripts', 'cbr_register_styles');
function cbr_register_styles()
{
    wp_enqueue_style( 'main-styles', get_stylesheet_uri() );

	wp_enqueue_style( 'main-old-styles', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/app.js', ['jquery'], null, true);

    wp_localize_script('cbr-main', 'ajaxurl', admin_url('admin-ajax.php'));
    $custom_css = "";

    wp_add_inline_style( 'main-styles', $custom_css );
}



if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Options',
        'menu_title' => 'Options',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ]);
}
