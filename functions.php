<?php

function register_my_menu() {
  register_nav_menu('primarynav-menu',__( 'Primary Navigation Menu' ));
}
add_action( 'init', 'register_my_menu' );



function register_my_menus() {
  register_nav_menus(
    array(
      'primarynav-menu' => __( 'Primary Navigation Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
