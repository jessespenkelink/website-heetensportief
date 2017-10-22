<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" class="<?php if(has_post_thumbnail()) { echo 'article-with-image'; } ?>">
        <div class="post-image-wrapper">
            <!-- post thumbnail -->
            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
                </a>
            <?php endif; ?>
            <!-- /post thumbnail -->
        </div>
        <div class="post-content-wrapper">
            <!-- post title -->
            <h2>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </h2>
            <!-- /post title -->

            <!-- post details -->
            <span class="date" style="font-style: italic;color: #27ae60;"><?php the_time('j F Y'); ?> - </span>
            <span class="author">Geplaatst door <?php the_author_posts_link(); ?></span>
            <!-- /post details -->

            <p><?php echo custom_excerpt(get_the_content(), 400); ?></p>
            <a href="<?php echo get_the_permalink(); ?>" class="archive-lees-meer">Lees meer ></a>
        </div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
