<?php 
//turn on sleeping features
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('gallery','video','image','quote'));

/**
 * Turn on Menu Support
 *	@since 0.1
 */

add_action('init', 'port_menus');

function port_menus(){
	register_nav_menus(array(
		'main_nav' 		=> 'Main Navigational Area',
		'footer_nav' 	=> 'Footer Navigational Area',
		));
}

//Remove inline height and width attribute on images

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

// add_action('widgets_init', 'cali_widgets');

// function cali_widgets(){
// 	register_sidebar(array(
// 		'name' 			=> 'Blog Sidebar',
// 		'id' 			=> 'blog-sidebar',
// 		'description' 	=> 'Sidebar for the Blog',
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget' 	=> '</section>',
// 		'before_title' 	=> '<h2>',
// 		'after_title' 	=> '</h2>'
// 		));

// 	register_sidebar(array(
// 		'name' 			=> 'Front Page Sidebar',
// 		'id' 			=> 'front-page-sidebar',
// 		'description' 	=> 'Sidebar for the Front page',
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget' 	=> '</section>',
// 		'before_title' 	=> '<h2>',
// 		'after_title' 	=> '</h2>'
// 		));
//}