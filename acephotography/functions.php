<?php 
/*
*
* Ace Photography child theme functions.php - template twentyseventeen 
*
*/

function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Gentium+Basic:400,700|Karla:400,700' );
}

add_action( 'wp_enqueue_scripts', 'google_fonts' );

function fa_icons() {
    wp_enqueue_style( 'fa-icons', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

add_action( 'wp_enqueue_scripts', 'fa_icons' ); 

function navigation_scripts() {
    if ( is_front_page() ) {
        wp_enqueue_script( 'navigation-scripts', get_stylesheet_directory_uri() . '/js/scrollspy.js', array('jquery'), '20170525');  
    }
}

add_action( 'wp_enqueue_scripts', 'navigation_scripts' ); 


function navigation() {
    if ( is_front_page() ) {
       wp_enqueue_script( 'navigation', get_stylesheet_directory_uri() . '/js/scrollspy_script.js', array('jquery'), '20170525'); 
    }
}

add_action( 'wp_enqueue_scripts', 'navigation' ); 
 