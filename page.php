<?php get_header(); ?>
	
<div id="postContainer" class="row">
    <div id="posts" style="width: 100%;">
	<?php $counter = 0; ?>
	<?php if (have_posts()) : ?>
	    <?php while (have_posts()) : the_post(); ?>
			<?php $counter++; ?>
            <div class="post">
                <div class="header">
                    <div class="offset">&#160;</div>
                    <div class="diag">&#160;</div>
                    <div class="text">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
                <div class="body">
				    <?php the_content(); ?>
                </div>
                <div style="clear: both;"></div>
            </div>
		<?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>
<!-- <?php the_author_posts_link(); ?> -->
<!-- <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> <?php _e('Comments',woothemes); ?></a> -->
<!-- <div class="postbody grid_7 omega <?php if ( $counter == 1 ) { ?>first<?php } ?>"> -->
<?php get_footer(); ?>
