<?php

// THIS IS THE DIFFERENT FIELDS
$options[] = array(	"name" => "General Settings",
					"type" => "heading");
						
$options[] = array(	"name" => "Theme Stylesheet",
					"desc" => "Please select your colour scheme here.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "",
					"type" => "select",
					"options" => $alt_stylesheets);

$options[] = array(	"name" => "Custom Logo",
					"desc" => "Paste the full URL of your custom logo image, should you wish to replace our default logo.",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "text");					 							    

$options[] = array(	"name" => "Google Analytics",
					"desc" => "Please paste your Google Analytics (or other) tracking code here.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");		

$options[] = array(	"name" => "Feedburner RSS URL",
					"desc" => "Enter your Feedburner URL here.",
					"id" => $shortname."_feedburner_url",
					"std" => "",
					"type" => "text");	

$options[] = array(	"name" => "Twitter Username",
					"desc" => "Enter your Twitter Username here.",
					"id" => $shortname."_twitter",
					"std" => "",
					"type" => "text");						

$options[] = array(	"name" => "Layout Options",
					"type" => "heading");

$options[] = array(	"name" => "Exclude pages from menu",
					"desc" => "Enter a comma-separated list of the <a href'http://faq.wordpress.com/2008/05/29/how-to-find-page-id-numbers/'>page ID's</a> that you'd like to exclude from the main top navigation. (ie. 1,2,3,4)",
					"id" => $shortname."_menupages",
					"std" => "",
					"type" => "text");					
					
$options[] = array(	"name" => "Display Full Post or Excerpt?",
					"desc" => "If checked, the homepage will display the full post content. If unchecked it will display the excerpt only.",
					"id" => $shortname."_the_content",
					"std" => "false",
					"type" => "checkbox");			
?>