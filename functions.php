<?php

function newdesign_left_sidebar(){
    register_sidebar(array(
        'name' => 'left sidebar',
        'description' => 'you can add left sidebar widgets from here',
        'id' => 'leftsidebar',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'right sidebar',
        'description' => 'you can add right sidebar widgets from here',
        'id' => 'rightsidebar'
    ));
}
add_action('widgets_init', 'newdesign_left_sidebar');


?>