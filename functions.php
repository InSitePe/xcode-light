<?php

// Register Custom Navigation Walker for function.php
require_once( get_template_directory() . '/wp-bootstrap-xcode.php' );

function prefix_xcode_nav_menu_args( $args ) {
    return array_merge( $args, array(
        'walker' => new WP_Bootstrap_Xcode(),
    ) );
}
add_filter( 'wp_nav_menu_args', 'prefix_xcode_nav_menu_args' );






function register_navwalker(){
	require_once( get_template_directory() . '/wp-bootstrap-xcode.php' );
}
add_action( 'after_setup_theme', 'register_navwalker' );
