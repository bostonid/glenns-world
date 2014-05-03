<?php
// Register my primary navigation menu
function register_my_menu() {
  register_nav_menu('primarynav-menu',__( 'Primary Navigation Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
  return '<a class="moretag" href="'. get_permalink($post->ID) . '">... [read more]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
