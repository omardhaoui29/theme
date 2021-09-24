<?php
// add menu suport
register_nav_menus( array(
    'pluginbuddy_mobile' => 'Pluginbuddy Mobile Navigation Menu',
    'footer_menu' =>'My Custom Footer Menu',
));
 
// add feature image
add_theme_support('post-thumbnails');

// Register side bar
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'side bar',
        'before_widget' => '<div class = "sidebar-style">',
        'after_widget' => '</div><br><br>',
        'before_widget' => '<h3>',
        'after_widget' => '</h3>',



    ));
}

?>