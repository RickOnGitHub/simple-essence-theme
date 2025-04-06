<main class="seth-archive">
    <section class="seth-archive-content">
        <?php
        // Check for posts or pages
        if (have_posts()) :
            // Loop through the results
            while (have_posts()) :
                // Populate the global variable with the post or page data
                the_post();
        ?>
                <a class="seth-archive-link" href="<?php the_permalink(); ?>">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    </article>
                </a>
            <?php
            endwhile;

            // Reset the global post data
            wp_reset_postdata();
        else : // If no posts are found, display a message
            ?>
            <div class="seth-no-posts">
                <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
            </div>
        <?php
        endif;
        ?>
    </section>
</main>