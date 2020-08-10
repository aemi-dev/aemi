<?php

if (get_theme_mod('aemi_remove_jquery_migrate',0) == 1)
{
	add_action('wp_default_scripts', 'aemi_remove_jquery_migrate');
}

add_action('edit_category', 'aemi_category_transient_flusher');
add_action('save_post', 'aemi_category_transient_flusher');

if (get_theme_mod('aemi_remove_script_version',0) == 1)
{
	add_filter('script_loader_src', 'aemi_remove_script_version', 15, 1);
	add_filter('style_loader_src', 'aemi_remove_script_version', 15, 1);
}

add_filter('script_loader_tag', 'aemi_async_scripts_filter', 10, 2);
add_filter('script_loader_tag', 'aemi_defer_scripts_filter', 10, 2);

add_filter('get_the_archive_title', 'aemi_custom_archive_title');

add_filter('comment_text', 'aemi_filter_comment_text');

if (get_theme_mod('aemi_enable_svg_support',0) == 1)
{
	add_filter('upload_mimes', 'aemi_add_svg_support', 99);
	add_filter('wp_check_filetype_and_ext', 'aemi_svg_upload_check', 10, 4);
	add_filter('wp_check_filetype_and_ext', 'aemi_svg_allow_svg_upload', 10, 4);
}

if (get_theme_mod('aemi_remove_emojis',0) == 1)
{
	add_action( 'init', 'aemi_remove_emojis' );
}