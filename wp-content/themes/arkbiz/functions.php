<?php
function arkbiz_css() {
    $parent_style = 'specia-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'arkbiz-main', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('arkbiz-default',get_stylesheet_directory_uri() .'/css/colors/default.css');
	wp_dequeue_style('specia-default');
	
	wp_enqueue_style('arkbiz-media-query',get_stylesheet_directory_uri() .'/css/media-query.css');
	wp_dequeue_style('specia-media-query');
}
add_action( 'wp_enqueue_scripts', 'arkbiz_css',999);
   	



require_once( get_stylesheet_directory() . '/inc/customize/arkbiz-header-section.php');
require_once( get_stylesheet_directory() . '/inc/customize/arkbiz-premium.php');

/**
 * Remove Customize Panel from parent theme
 */
function arkbiz_remove_parent_setting( $wp_customize ) {
	$wp_customize->remove_control('cta_btn_second_head');
	$wp_customize->remove_control('call_action_btn_middle_text');
	$wp_customize->remove_control('call_action_button_label2');
	$wp_customize->remove_control('call_action_button_link2');
}
add_action( 'customize_register', 'arkbiz_remove_parent_setting',99 );


/**
 * Import Options From Specia Theme
 *
 */
function arkbiz_parent_theme_options() {
	$specia_mods = get_option( 'theme_mods_specia' );
	if ( ! empty( $specia_mods ) ) {
		foreach ( $specia_mods as $specia_mod_k => $specia_mod_v ) {
			set_theme_mod( $specia_mod_k, $specia_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'arkbiz_parent_theme_options' );