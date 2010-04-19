<?php if ( ( is_archive() or is_search() or is_tag() or is_category() ) && !$GLOBALS['sitemap'] ) { ?>
<div class="pageinfo">
	<?php if (is_category()) { ?><?php _e('You are currently browsing the archives for',woothemes); ?> <strong>"<?php echo single_cat_title(); ?>"</strong>.
	<?php } elseif (is_day()) { ?><?php _e('You are currently browsing the archives for',woothemes); ?> <strong><?php the_time('F jS, Y'); ?></strong>.
	<?php } elseif (is_month()) { ?><?php _e('You are currently browsing the archives for',woothemes); ?> <strong><?php the_time('F, Y'); ?></strong>.
	<?php } elseif (is_year()) { ?><?php _e('You are currently browsing the archives for',woothemes); ?> <strong><?php the_time('Y'); ?></strong>.
	<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?><?php _e('You are currently browsing the archives',woothemes); ?>.
	<?php } elseif (is_tag()) { ?><?php _e('You are currently browsing the tag archives for',woothemes); ?> <strong>"<?php echo single_tag_title('', true); ?>"</strong>.
	<?php } elseif (is_search()) { ?><?php _e('You are currently browsing the search results for',woothemes); ?> <strong>"<?php the_search_query() ?>"</strong>.
	<?php } ?>
		
</div><!--pageinfo-->
	
<?php } ?>

<div id="content">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1)) :endif; ?>
</div>
