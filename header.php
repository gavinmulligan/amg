<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title>
	<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
	<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
	<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?>
	<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
	<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
	<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
	<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
	<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
	</title>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" />	

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!--[if lt IE 7]>
    <script src="<?php bloginfo('template_directory'); ?>/includes/js/pngfix.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" type="text/css" />	
    <![endif]-->

    <?php wp_enqueue_script('jquery'); ?>     
    <?php wp_head(); ?>

    <!-- Show custom logo -->
    <?php if ( get_option('woo_logo') <> "" ) { ?><style type="text/css">#logo h1 {background: url(<?php echo get_option('woo_logo'); ?>) no-repeat !important; }</style><?php } ?> 

    <script type="text/javascript">
        jQuery(document).ready(function(){
            console.log(jQuery("#sidebar_accordian"));
    		jQuery("#sidebar_accordian").accordion({ header: "h4", autoHeight: false });
    	});
    </script>
   
</head>

<body>
    <div id="root">
        <div class="thinSlice"><div class="lightSlice"><div class="thinSlice"><div class="darkSlice">
        <div id="mainContentContainer">
            <div id="mainContent">
                <div style="display: none;" id="photoCubeContainer" class="row">
                    <div class="column">
                        <div class="photoCube">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.photoCube.1.png"/>
                        </div>
                    </div>
                    <div class="column">
                        <div class="photoCube">
                            <img src="<?php bloginfo('template_directory'); ?>/images/logo.photoCube.2.png"/>
                        </div>
                    </div>
                    <div class="column">
                        <div class="photoCube">
                            <img src="<?php bloginfo('template_directory'); ?>/images/logo.photoCube.3.png"/>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div id="logo" class="row">
                    <div id="logoText">&#160;</div>
                    <div id="logoImage">&#160;</div>
                </div>
                <div id="menuContainer">
                    <div id="menu">
                        <ul id="navigation">
                            <li class="blog<?php if (is_home()){ ?> selected<?php } ?>">
                                <a href="<?php bloginfo('url'); ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/menu.blog.png"
                                         style="height: 59px; width: 120px;"/>
                                </a>
                            </li>
                            <li class="aboutMe<?php if (is_page(2)){ ?> selected<?php } ?>">
                                <a href="<?php bloginfo('url'); ?>?page_id=2">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/menu.aboutMe.png"
                                         style="height: 45px; width: 182px;"/>
                                </a>
                            </li>
                            <!-- <li class="photos">&#160;</li> -->
                        </ul>
                    </div>
                </div>
                <div id="menuSpacer" class="row">&#160;</div>
                <div id="twitter" class="row">
                    <div id="twitterBird">&#160;</div>
                    <div id="twitterStatus">                    
                        <div class="status">
                            <ul id="twitter_update_list"><li></li></ul>
                        </div>
                        <div class="byline">
                            <!--
                            tweeted at 6:20pm Jan 4th via HTC Peep
                            -->
                        </div>
                    </div>
                    <div id="twitterUserIconContainer">
                        <div id="twitterUserIcon">&#160;</div>
                    </div>
                    <div style="clear: both;"></div>
                </div>

		        <!--
                <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>		
                -->
            <!--
			<div id="twitter" class="grid_8 omega">
				<ul id="twitter_update_list"><li></li></ul>
            </div>
					<li><a <?php if ( is_home() ) { ?>class="current_page_item"<?php } ?> href="<?php bloginfo('url'); ?>">
							Home<span>Where it all began</span>
						</a>
					</li>
                    <?php woothemes_get_pages(); ?>
            -->
