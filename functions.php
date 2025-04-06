<?php
// Define the theme version
define('SIMPLE_ESSENCE_VERSION', '1.0.0');

// Load scripts and styles
function seth_enqueue_scripts()
{
    // Load theme stylesheet
    wp_enqueue_style('seth-style', get_stylesheet_uri(), array(), SIMPLE_ESSENCE_VERSION, 'all');
}
add_action('wp_enqueue_scripts', 'seth_enqueue_scripts');

// Set up the theme
function seth_setup()
{
    // Title tag
    add_theme_support('title-tag');

    // RSS feed
    add_theme_support('automatic-feed-links');

    // Enable thumbnails
    add_theme_support('post-thumbnails');

    // HTML5 support
    add_theme_support(
        'html5',
        array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption'
        )
    );
}
add_action('after_setup_theme', 'seth_setup');

// Optimize WordPress by removing core WordPress features
function seth_optimize_theme()
{
    // Remove WP version from RSS
    add_filter('the_generator', '__return_false');

    // Remove WP version from scripts
    remove_action('wp_head', 'wp_generator');

    // Remove emoji support
    remove_action('wp_head', 'print_emoji_detection_script', 7);

    // Remove emoji styles
    remove_action('wp_print_styles', 'print_emoji_styles');

    // Remove REST API link tag
    remove_action('wp_head', 'rest_output_link_wp_head', 10);

    // Remove oEmbed discovery links
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

    // Remove oEmbed-specific JavaScript from the front-end and back-end
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // Remove shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);

    // Remove remote links from head
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');

    // Remove default WordPress feed
    remove_action('wp_head', 'feed_links', 2);

    // Remove the auto image sizes css from WordPress
    add_filter('wp_img_tag_add_auto_sizes', '__return_false');
}
add_action('init', 'seth_optimize_theme');

// Remove gutenberg block library and theme style CSS
function seth_remove_wp_blocks_and_theme_css()
{
    // Remove WordPress block library CSS
    wp_dequeue_style('wp-block-library');

    // Remove WordPress block library theme CSS
    wp_dequeue_style('wp-block-library-theme');

    // Remove WooCommerce block CSS
    wp_dequeue_style('wc-block-style');

    // Remove WordPress global styles
    wp_dequeue_style('global-styles');

    // Remove WordPress classic theme styles
    wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'seth_remove_wp_blocks_and_theme_css', 100);
