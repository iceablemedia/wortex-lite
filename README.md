# Wortex Lite

WordPress Theme by [Iceable Themes](https://www.iceablethemes.com)  

## About Wortex Lite

Wortex Lite is a clean, professional looking, responsive theme for WordPress. Perfect for tech or design oriented blogs and creative business websites.

It features two widgetizable areas (sidebar and optional footer), two custom menus (main navbar and optional footer menu) and a full-width header image.

Wortex Lite is the lite version of [Wortex Pro](https://www.iceablethemes.com/shop/wortex-pro), which comes with many additional features and access to premium class pro support forum.

## Installation

### From your WordPress dashboard

1. Visit "Appearance > Themes > Add New"
2. Search for "Wortex Lite"
3. Click "Install" and then "Activate".

### From WordPress.org

1. Download [Wortex Lite](https://wordpress.org/themes/wortex-lite/).
2. Upload the "wortex-lite" directory to your "/wp-content/themes/" directory, using your favorite method (ftp, FileManager, etc...)
3. Activate Wortex Lite from the Appearance > Themes page in wp-admin.

### From GitHub

1. Clone or Download this repo.
2. Upload the "wortex-lite" directory to your "/wp-content/themes/" directory, using your favorite method (ftp, FileManager, etc...)
3. Activate Wortex Lite from the Appearance > Themes page in wp-admin.

## Getting Started

* Once you activate the theme from your WordPress admin panel, you can visit the "Customize" page to quickly and easily upload your own logo and set a few other options.
* If you will be using a custom header image, you can also optionally choose to enable or disable it on your homepage, blog index pages, single post pages and individual pages.
* It is highly recommended to set a menu (in Appearance > Menus) instead of relying on the default fallback menu. Doing so will automatically activate the dropdown version of your menu in responsive mode.
* You can also set a custom menu to appear at the bottom right of your site. Note this footer menu doesn't support sub-menus, only top-level menu items will be displayed.
* Footer widgets: The widgetizable footer is disabled by default. To activate it, simply go to Appearance > Widgets and drop some widgets in the "Footer" area, just like you would do for the sidebar. It is recommended to use 4 widgets in the footer, or no widgets at all to disable it.

Additional documentation and free support forums can be found at https://www.iceablethemes.com under "support".

## License

This theme is released under the terms of the GNU GPLv2 License.
Please refer to license.txt for more information.

## Credits

This theme bundles some third party javascript/jQuery plugins and font, all open source and released under GPL or GPL compatible licenses:
* hoverIntent: Copyright 2007, 2013 Brian Cherne. MIT License. http://cherne.net/brian/resources/jquery.hoverIntent.html
* superfish: Copyright 2013 Joel Birch. Dual licensed under the MIT and GPL licenses. http://users.tpg.com.au/j_birch/plugins/superfish/
* Font Awesome: Copyright Dave Gandy. Font licensed under SIL OFL 1.1. CSS code licensed under MIT License. http://fortawesome.github.io/Font-Awesome/

All other files are Copyright 2014-2017 Iceable Media and released under the terms of the GNU GPLv2 License.

## Translations

Currently available translations:

* French (fr_FR) translation: by Iceable Media

Translating this theme into your own language is quick and easy, you will find a .POT file in the /languages folder to get you started. It contains about 80 strings only.
If you don't have a .po file editor yet, you can download Poedit from https://www.poedit.net/download.php - Poedit is free and available for Windows, OSX and Linux.

If you have translated this theme into your own language and are willing to share your translation with the community, please feel free to do so on the forums at https://www.iceablethemes.com
Your translation files will be added to the next update. Don't forget to leave your name, email address and/or website link so credits can be given to you!

## Changelog

= 1.2.15 =
October 10th, 2017
* Fixed wrong text-domain in comments.php

= 1.2.14 =
October 10th, 2017
* Refactored all PHP code to conform to the WordPress coding standards

= 1.2.13 =
August 25th, 2017
* Updated font-awesome to 4.7.0
* Wrapped pingback url in appropriate conditionals in header.php
* HTML5Shiv is now properly enqueued
* Prefixed theme constants
* Using the_archive_title() for archive page titles
* Ordered placeholders for printf() in footer.php
* Removed additional support for child themes for WP<4.7 (was relying on file_exists() which emits a PHP E_WARNING upon failure)
* Fixed singular placeholder in gettext function in comments.php

= 1.2.12 =
June 21th, 2017
* Removed function_exists('wp_site_icon') checks and related functions (deprecated since WP 4.3)

= 1.2.11 =
May 8th, 2017
* Added theme constants
* Load CSS and JS file with theme version to prevent potential issue after updates

= 1.2.10 =
Mars 8th, 2017
* Fixed wortex_remove_rel_cat() to only remove "category" (but not "tag") value from the rel attribute
* Added php tags in footer.php, making it less confusing for users who want to modify the footer note

= 1.2.9 =
January 9th, 2017
* Updated copyright to 2017

= 1.2.8 =
December 12th, 2016
* Now using get_theme_file_uri() to register stylesheets and javascripts for WordPress 4.7
* Tested with WordPress 4.7

= 1.2.7 =
November 14th, 2016
* Updated searchforms to HTML5 markup

= 1.2.6 =
August 29th, 2016
* Removed function wortex_render_title() used as a fallback for title tag support
* Dropped support for WordPress lesser than 4.1
* Tested with WordPress 4.6

= 1.2.5 =
June 16th, 2016
* Tested with WordPress 4.5.2
* Update font-awesome to 4.6.3
* Updated external links to wordpress.org and iceablethemes.com to https
* Removed php closing tags from end of files to prevent potential issues
* Updated theme tags for WordPress.org

= 1.2.4 =
January 13th, 2016
* Enhanced support for <!--more--> quicktag
* Updated copyright to 2016
* Tested with WordPress 4.4.1

= 1.2.3 =
November 23rd, 2015
* Fixed issue with sidebar in WordPress 4.4
* Tested with WordPress 4.4 (beta 4)

= 1.2.2 =
November 5th, 2015
* Fixed text-domain typo in full-width.php

= 1.2.1 =
November 4th, 2015
* Disabled the "favicon" theme setting for WordPress 4.3+ (no longer useful since WP 4.3+ includes wp_site_icon)
* Added screen-reader-text CSS support
* Fixed a small glitch in metadata alignment
* Changed textdomain to theme slug: 'wortex-lite'
* Tested with WordPress 4.3

= 1.2.0 =
July 22th, 2015
* Replaced theme options panel with Customizer implementation
* Added "title-tag" support
* Updated fr_FR translation file
* Tested with WordPress 4.2.2

= 1.1.3 =
March 31th, 2015
* Tested with WP 4.1.1
* Updated Font Awesome from 4.2.0 to 4.3.0
* Now bundling Font Awesome
* Removed 'Open Sans' webfont enqueuing (no longer useful, was left there for compatibility with WP 3.8 and lesser)
* Removed content filters
* Renamed and moved /page-full-width.php to /page-templates/full-width.php
* Appropriately prefixed 'wortex-style' handle when registering style.css
* Now using core bundled version of hoverIntent
* Removed analytics tagging on external links in Theme Options
* Removed obsolete code in comments.php
* Reviewed and enhanced permission check, validation, sanitation and escaping in theme options
* Moved admin notice to theme options page only and removed wortex_notice_ignore()
* Made all text strings translatable in front-end and back-end
* Updated .POT file
* Updated fr_FR translation
* Updated copyright date to 2015

= 1.1.2 =
September 24th, 2014
* Tested with WP 4.0
* Fixed hAtom structured data (Errors like Missing required field "entry-title" / "updated" / hCard "author" in Google Webmaster tools)
* Updated hAtom structured data: using post date as "published" and modified_date as "updated"
* Removed hentry class from pages (hentry is irrelevant for static content)
* Updated Font-Awesome from 4.0.3 to 4.2.0

= 1.1.1 =
September 1st, 2014
* Fixed W3C validator error caused by the "X-UA-Compatible" meta tag. The theme now fully validates as HTML5.
* Replaced (has_post_thumbnail()) with ('' != get_the_post_thumbnail()) (as per codex recommendation - fixes an occasional issue)
* Fixed an odd glitch with footer widgets columns
* Fixed CSS glitch in Firefox with large logo and featured images

= 1.1.0 =
June 30rd, 2014
* Added Background support
* Added Boxed/Wide layout option
* Updated Screenshot
* Fixed typo in theme options title: "Wortex Lite Settings"

= 1.0.2 =
June 23rd, 2014
* Added missing .pot file
* Added French (fr_FR) translation

= 1.0.1 =
June 16th, 2014
* Added ellipsis (...) to the end of truncated excerpts when displaying the "read more" button (based on user feedback).

= 1.0.0 =
May 14th, 2014
* Initial public release
