<?php

// Register widgetized areas

function the_widgets_init() {
    if ( !function_exists('register_sidebars') )
        return;

    register_sidebars(1,array('name' => 'Sidebar','before_widget' => '<div class="widget">','after_widget' => '</div></div>','before_title' => '<div class="title">','after_title' => '</div><div class="content">'));
    register_sidebars(3,array('name' => 'Footer %d','before_widget' => '','after_widget' => '','before_title' => '<h4>','after_title' => '</h4>'));    
    
}

add_action( 'init', 'the_widgets_init' );


    
?>
