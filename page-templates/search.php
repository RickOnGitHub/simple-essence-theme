<main>
    <h1>
        <?php echo __('Search results for', 'simple-essence'); ?> <?php the_search_query(); ?>:
    </h1>
    <?php
    // Check for posts or pages
    if (have_posts()) :
        // Loop through the search results
        while (have_posts()) :
            // Populate the global variable with the post or page data
            the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
                    <figure><?php the_post_thumbnail(); ?></figure>
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p><?php the_author(); ?></p>
                    <p><?php the_date(); ?></p>
                </header>
                <div>
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php
        // End the loop
        endwhile;

        // Reset the global post data
        wp_reset_postdata();
    else :
        // If there are no posts or pages
        ?>
        <p>
            <?php echo __('Sorry, no results found.', 'simple-essence'); ?>
        </p>
    <?php
    endif;
    ?>
</main>