<?php
// Include the header.php file
get_header();

// Check for the type of page
if (is_search()) :
    // Include the search.php file from /page-template/search.php
    get_template_part('page-templates/search');
elseif (is_404()) :
    // Include the 404.php file from /page-template/404.php
    get_template_part('page-templates/404');
elseif (is_single() || is_page()) :
    // Include the single.php file from /page-template/single.php
    get_template_part('page-templates/single');
else :
    // Include the archive.php file from /page-template/archive.php
    get_template_part('page-templates/archive');
endif;

// Include the footer.php file
get_footer();
