<?php
/**
 *
 * Wortex Lite WordPress Theme by Iceable Themes | http://www.iceablethemes.com
 *
 * Copyright 2014 Mathieu Sarrasin - Iceable Media
 *
 * Admin settings template
 *
 */

// Load the icefit options framework
include_once('icefit-options.php');

// Set setting panel name and slug
$wortex_settings_name = "Wortex Pro Settings";
$wortex_settings_slug = "wortex_settings";

// Set settings template
function wortex_settings_template() {

	$settings_options = array();

// START GO PRO PAGE

	$settings_options[] = array(
		'name'          => 'Go Pro',
		'type'          => 'start_menu',
		'id'            => 'gopro_page',
		'icon'          => 'down',
	);

		$settings_options[] = array(
			'name'          => 'Upgrade to Wortex Pro!',
			'desc'          => '',
			'id'            => 'gopro',
			'type'          => 'gopro',
			'default'       => '',
		);

	$settings_options[] = array('type' => 'end_menu');

// END GO PRO PAGE

//START MAIN SETTINGS PAGE

	$settings_options[] = array(
		'name'          => 'Main settings',
		'type'          => 'start_menu',
		'id'            => 'main',
		'icon'          => 'control',
	);

		$settings_options[] = array(
			'name'          => 'Logo',
			'desc'          => 'Upload your own logo',
			'id'            => 'logo',
			'type'          => 'image',
			'default'       => '',
		);

		$settings_options[] = array(
			'name'          => 'Site Title',
			'desc'          => 'Choose "display title" if you want to use a text-based title instead of an uploaded logo.',
			'id'            => 'header_title',
			'type'          => 'radio',
			'default'       => 'Use Logo',
			'values'		=> array ('Use Logo', 'Display Title'),
		);

		$settings_options[] = array(
			'name'          => 'Favicon',
			'desc'          => 'Set your favicon. 16x16 or 32x32 pixels, either 8-bit or 24-bit colors. PNG (W3C standard), GIF, or ICO.',
			'id'            => 'favicon',
			'type'          => 'image',
			'default'       => '',
		);

		$settings_options[] = array(
			'name'          => 'Display tagline',
			'desc'          => '',
			'id'            => 'display_tagline',
			'type'          => 'radio',
			'default'       => 'Off',
			'values'		=> array ('Off', 'On'),
		);

		$settings_options[] = array(
			'name'          => 'Blog Index Shows',
			'desc'          => 'Choose what content to display on Main Blog page and archives',
			'id'            => 'blog_index_shows',
			'type'          => 'radio',
			'default'       => 'Excerpt',
			'values'		=> array ('Excerpt', 'Full content'),
		);
		
		$settings_options[] = array(
			'name'          => 'Responsive mode',
			'desc'          => 'Turn this setting off if you want your site to be unresponsive.',
			'id'            => 'responsive_mode',
			'type'          => 'radio',
			'default'       => 'on',
			'values'		=> array ('on', 'off'),
		);

	$settings_options[] = array('type' => 'end_menu');
// END MAIN SETTINGS SECTION

// START HEADER IMAGE PAGE
	$settings_options[] = array(
		'name'          => 'Custom Header',
		'type'          => 'start_menu',
		'id'            => 'custom_header',
		'icon'          => 'picture',
	);

		$settings_options[] = array(
			'name'          => 'Display custom header on Homepage',
			'desc'          => 'Enable or disable display of custom header image on the front page.',
			'id'            => 'home_header_image',
			'type'          => 'radio',
			'default'       => 'On',
			'values'		=> array ('On', 'Off'),			
		);

		$settings_options[] = array(
			'name'          => 'Display custom header on Blog Index',
			'desc'          => 'Enable or disable display of custom header image on blog index pages.',
			'id'            => 'blog_header_image',
			'type'          => 'radio',
			'default'       => 'On',
			'values'		=> array ('On', 'Off'),			
		);

		$settings_options[] = array(
			'name'          => 'Display custom header on Blog Posts',
			'desc'          => 'Enable or disable display of custom header image on single blog posts',
			'id'            => 'single_header_image',
			'type'          => 'radio',
			'default'       => 'On',
			'values'		=> array ('On', 'Off'),			
		);

		$settings_options[] = array(
			'name'          => 'Display custom header on Pages',
			'desc'          => 'Enable or disable display of custom header image on individual pages.',
			'id'            => 'pages_header_image',
			'type'          => 'radio',
			'default'       => 'On',
			'values'		=> array ('On', 'Off'),			
		);


	$settings_options[] = array('type' => 'end_menu');
// END HEADER IMAGE PAGE

// START SUPPORT PAGE
	$settings_options[] = array(
		'name'          => 'Support and Feedback',
		'type'          => 'start_menu',
		'id'            => 'support_feedback',
		'icon'          => 'network',
	);

		$settings_options[] = array(
			'name'          => 'Support and Feedback',
			'desc'          => '',
			'id'            => 'support_feedback',
			'type'          => 'support_feedback',
			'default'       => '',
		);

	$settings_options[] = array('type' => 'end_menu');
// END SUPPORT PAGE

	return $settings_options;
}
?>