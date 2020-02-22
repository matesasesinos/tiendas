<?php

//menu
function matecito_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __('Footer Menu'),
        'extra-menu' => __( 'Extra Menu' ),
        'social-menu' => __( 'Social Menu' )
      )
    );
  }
add_action( 'init', 'matecito_menus' );
