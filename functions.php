<?php
@ini_set( 'upload_max_size' , '128M' );

if(!function_exists('bridge_qode_child_theme_enqueue_scripts')) {

	Function bridge_qode_child_theme_enqueue_scripts() {
		wp_register_style('bridge-childstyle', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('bridge-childstyle');
		wp_register_script('bridge-childscript', get_stylesheet_directory_uri() . '/js/script.js',array('jquery'));
		wp_enqueue_script('bridge-childscript');
	}

	add_action('wp_enqueue_scripts', 'bridge_qode_child_theme_enqueue_scripts', 11);
}

// Disabling auto updating plugin and themes

add_filter( 'auto_update_theme', '__return_false' );
add_filter( 'auto_update_plugin', '__return_false' );


function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

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


