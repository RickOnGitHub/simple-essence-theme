<?php
// Check for posts or pages
if (have_posts()) :
?>
    <main class="seth-archive">
        <section class="seth-archive-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
            ?>
                    <a class="seth-archive-link" href="<?php the_permalink(); ?>">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        </article>
                    </a>
            <?php
                endwhile;

                // Reset the global post data
                wp_reset_postdata();
            else :
                echo '<p>' . __('Sorry, no results found.', 'simple-essence') . '</p>';
            endif;
            ?>
        </section>
    </main>
<?php
endif;
