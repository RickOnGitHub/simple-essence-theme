<?php

// Load scripts and styles
function seth_enqueue_scripts()
{
    // Load theme stylesheet
    wp_enqueue_style('seth-style', get_stylesheet_uri(), array(), SIMPLE_ESSENCE_VERSION, 'all');
}
add_action('wp_enqueue_scripts', 'seth_enqueue_scripts');
