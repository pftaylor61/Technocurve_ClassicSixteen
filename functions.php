<?php
/*
 * This is the functions file for the TC-ClassicSixteen theme - 
 * a child theme of ClassicSixteen
 * ClassicSixteen itself is a fork of the original Wordpress TwentySixteen theme
 */
/*
 * The ClassicSixteen theme loads the active stylesheet.
 * we need the actiove stylesheet from tc-classicsixteen
 * and the stylersheet from the original classicsixteen theme
 */
add_action( 'wp_enqueue_scripts', 'tc_classicsixteen_enqueue_styles' );

function tc_classicsixteen_enqueue_styles() {
	wp_enqueue_style( 
		'tc-classicsixteen-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);
}






?>
