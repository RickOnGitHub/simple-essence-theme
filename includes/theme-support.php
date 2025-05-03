<?php

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

    // Add primary menu support
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'seth'),
        )
    );
}
add_action('after_setup_theme', 'seth_setup');
