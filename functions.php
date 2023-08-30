<?php
@ini_set( 'upload_max_size' , '128M' );

if(!function_exists('bridge_qode_child_theme_enqueue_scripts')) {

	Function bridge_qode_child_theme_enqueue_scripts() {
		wp_register_style('bridge-childstyle', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('bridge-childstyle');
	}

	add_action('wp_enqueue_scripts', 'bridge_qode_child_theme_enqueue_scripts', 11);
}

// Disabling auto updating plugin and themes

add_filter( 'auto_update_theme', '__return_false' );
add_filter( 'auto_update_plugin', '__return_false' );


// function add_google_fonts() {
    
//     $font_families = array(
//         'Open Sans :400,500,600,700,800,900'
//     );
//     $query_args = array(
//         'family' => urlencode(implode('|', $font_families)),
//         // 'subset' => urlencode('latin,latin-ext'),
//     );
//     wp_enqueue_style( 'google-fonts', add_query_arg( $query_args, '//fonts.googleapis.com/css' ), array(), null );
// }
// add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


