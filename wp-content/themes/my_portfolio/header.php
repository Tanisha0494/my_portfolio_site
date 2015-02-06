<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">

<title><?php bloginfo('name');?> </title>

<meta name="viewport" content="width = device-width, initial-scale = 1">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/reset.css" />
<?php 
	//Necessary in <head> for JS and plugins to work. 
	//I like it before style.css loads so the theme stylesheet is more specific than all others.
	wp_head();  ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<body <?php body_class('cf'); ?>>

<section class="search cf"><?php get_search_form(); //includes searchform.php if it exists, if not, this outputs the default search bar ?></section>

<header>
<h1 class="hide"> <?php bloginfo('name'); ?></h1>

<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php bloginfo( 'name' ) ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"><?php bloginfo( 'name' ) ?></a></h1>

<?php //wp_list_pages(array(
					//'depth'        => 0,
					//'title_li'     => __('Pages'), 
//)) ?>

<?php wp_nav_menu( array(
				'theme_location' 	=> 'main_nav', //one of the menu areas from functions.php (has to be spelled the same.)
				'container' 		=> 'nav', //div or nav
				'container_class'	=> 'gnav cf', 
				'fallback_cb' 		=> '',//prevent ugly list of pages
				'menu_class' 		=> 'gmenu cf'
			) ); ?>

</header>