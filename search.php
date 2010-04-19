<?php get_header(); ?>
	
<div id="postContainer" class="row">
    <div id="posts">
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
                <div class="byline">
                    <div class="date">
                        <div class="icon">&#160;</div>
                        <div class="textContainer">
                            <div class="text">
                                <?php the_time('D'); ?><br/><?php the_time('m.d.y'); ?>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="categoryContainer">
                        <div class="categoryHeader">
                            <div class="text">Filed Under:</div>
                        </div>
                        <div class="categories">
                            <div class="category">
                                <span class="text"><?php the_category(', '); ?></span>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div class="body">
                    <?php the_excerpt(); ?><p><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php _e('Continue Reading...',woothemes); ?></a></p>
					<?php the_tags('<p><b>Tags:</b> ',', ','</p>'); ?>
                </div>
                <div class="comments">
                    <?php comments_template(); ?>
                </div>
                <div style="clear: both;"></div>
            </div>
		<?php endwhile; ?>
    <?php else: ?>
        <p style="margin: 15px 0;">
        No results!
        </p>
    <?php endif; ?>
        <div id="postNav">
			<div class="fl"><?php next_posts_link(__('&laquo; Older Entries',woothemes)); ?></div>
            <div class="fr"><?php previous_posts_link(__('Newer Entries &raquo;',woothemes)); ?></div>
        </div>
    </div>
    <div id="sidebar"><?php get_sidebar(); ?></div>
</div>
<!-- <?php the_author_posts_link(); ?> -->
<!-- <a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?> <?php _e('Comments',woothemes); ?></a> -->
<!-- <div class="postbody grid_7 omega <?php if ( $counter == 1 ) { ?>first<?php } ?>"> -->
<?php get_footer(); ?>
