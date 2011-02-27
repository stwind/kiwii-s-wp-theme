<?php 
if ( function_exists ('register_sidebar')) { 
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget-container widget-pink %2$s">',
        'after_widget' => '</div></aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3><div class="widget-content">',
    ));

    register_sidebar(array(
        'name' => 'Right Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget-container widget-pink %2$s">',
        'after_widget' => '</div></aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3><div class="widget-content">',
    ));
} ?>
