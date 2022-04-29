<?php

if (!function_exists('hkvp_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function hkvp_setup() {

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded  tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(825, 510, true);

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus([
            'primary' => __('Primary Menu', 'vp'),
            'social'  => __('Social Links Menu', 'vp'),
        ]);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', [
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ]);

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', [
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ]);
    }
endif;

add_action('after_setup_theme', 'hkvp_setup');

function my_style_enqueue_styles() {
    wp_enqueue_style('helper', get_template_directory_uri() . '/assets/css/helper.css');
    wp_enqueue_style('pe_icon_7', get_template_directory_uri() . '/assets/css/pe-icon-7-stroke.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'my_style_enqueue_styles');

// https://firstsiteguide.com/wordpress-copyright-notice/
function create_copyright(): void {
    $all_posts = get_posts(
        'post_status=publish&order=ASC');
    $first_post = $all_posts[0];
    $first_date = $first_post->post_date_gmt;
    _e('&copy;');
    if (substr($first_date, 0, 4) == date('Y')) {
        echo date('Y');
    } else {
        echo substr($first_date, 0, 4) . "-" . date('Y');
    }
    echo ' <strong>' . get_bloginfo('name') . '</strong> ';
}
