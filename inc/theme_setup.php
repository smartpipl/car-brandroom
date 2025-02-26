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
    wp_enqueue_style( 'styles', get_stylesheet_uri() );

    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/dist/main.css' );

    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/dist/main.js', ['jquery'], null, true);

    wp_localize_script('cbr-main', 'ajaxurl', admin_url('admin-ajax.php'));
    $custom_css = "
        .hero{ 
            background-image: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgba(0, 0, 0, 0) 15%, rgba(0, 0, 0, 0) 80%, rgb(255, 255, 255) 87%),image-set(url(".get_template_directory_uri()."/dist/images/ef9713ab312bbb85bfd0.webp) type(\"image/webp\"), url(".get_template_directory_uri()."/dist/images/hero_bg.png) type(\"image/png\")) !important;
        }
        .race-card{
            background-image: image-set(url(".get_template_directory_uri()."/dist/images/ae4601cdcc10dacea1ca.webp) type(\"image/webp\"), url(".get_template_directory_uri()."/dist/images/italy.png) type(\"image/png\"));
        }
    ";

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
