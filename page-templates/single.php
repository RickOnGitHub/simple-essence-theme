<main class="seth-single">
    <section class="seth-single-content">
        <?php
        // Check for posts or pages
        if (have_posts()) :
            // Loop through the results
            while (have_posts()) :
                // Populate the global variable with the post or page data
                the_post();
        ?>
                <div>
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile; // close the loop

            // Reset the global post data
            wp_reset_postdata();
        else : // if no posts are found, display a message
            ?>
            <div class="seth-no-posts">
                <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
            </div>
        <?php
        endif;
        ?>
    </section>
</main>