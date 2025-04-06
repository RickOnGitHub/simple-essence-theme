<?php
// Check for posts or pages
if (have_posts()) :
?>
    <main class="seth-single">
        <section class="seth-single-content">
            <?php
            // Loop through the results
            while (have_posts()) :
                /// Populate the global variable with the post or page data
                the_post();
            ?>
                <div>
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile; // close the loop

            // Reset the global post data
            wp_reset_postdata();
            ?>
        </section>
    </main>
<?php
endif;
