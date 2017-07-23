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

function add_footer() {
    register_sidebar( array(
            'name'          => __( 'Footer 3', 'twentyseventeen' ),
            'id'            => 'sidebar-4',
            'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
}

add_action( 'widgets_init', 'add_footer' );

function add_nav_menu() {

    register_nav_menus( array(
		'pages'    => __( 'Page Menu', 'twentyseventeen' ),
	) );
}

add_action( 'after_setup_theme', 'add_nav_menu' );
 