<?php
// Define the theme version
define('SIMPLE_ESSENCE_VERSION', '1.0.0');

// Include theme support functions
require get_template_directory() . '/includes/theme-support.php';

// Include optimization functions
require get_template_directory() . '/includes/optimizations.php';

// Include enqueue functions
require get_template_directory() . '/includes/enqueue-assets.php';
