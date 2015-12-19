<?php
/**
 *
 * Wortex Lite WordPress Theme by Iceable Themes | http://www.iceablethemes.com
 *
 * Copyright 2014-2015 Mathieu Sarrasin - Iceable Media
 *
 * Footer Template
 *
 */ 

	if (is_active_sidebar( 'footer-sidebar' ) ):
		?><div id="footer"><div class="container"><ul><?php
			dynamic_sidebar( 'footer-sidebar' );
		?></ul></div></div><?php
	endif;

?><div id="sub-footer"><div class="container"><?php
?><div class="sub-footer-left"><p><?php

/* You are free to modify or replace this by anything you like as per the terms of the GPL license */

	printf( __('Copyright &copy; %s %s.', 'wortex'), date('Y'), get_bloginfo('name') ); 
	echo ' '; 
	printf( __('Proudly powered by <a href="%s" title="%s">%s</a>.', 'wortex'), 
		esc_url( __('http://wordpress.org/', 'wortex') ), 
		esc_attr__( 'Semantic Personal Publishing Platform', 'wortex' ), 
		__('WordPress', 'wortex') 
	); 
	echo ' '; 
	printf( __('Wortex design by <a href="%s" title="%s">Iceable Themes</a>.', 'wortex'), 
		esc_url( 'http://www.iceablethemes.com' ), 
		esc_attr( 'Iceablethemes', 'wortex' ) 
	);

/* Stop editing here */

?></p></div><?php

?><div class="sub-footer-right"><?php
	$footer_menu = array( 'theme_location' => 'footer-menu', 'depth' => 1);
	wp_nav_menu( $footer_menu );
?></div></div></div><?php // End footer

?></div><?php  // End main wrap

wp_footer();

?></body></html>