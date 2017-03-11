<?php
/**
 * wiltonwings Theme Customizer
 *
 * @package wiltonwings
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wiltonwings_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'wiltonwings_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wiltonwings_customize_preview_js() {
	wp_enqueue_script( 'wiltonwings_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wiltonwings_customize_preview_js' );


function wiltonwings_customize_top($wp_customize){
	$wp_customize->add_section('Info Header Top', array(
		'title' => __('info_header_top','wiltonwings'),
		'description' => 'Information display header top, telephone and other options',
		'priority' => 30,
	));

	$wp_customize->add_setting('top_information', array(
		'slug'=>'top_information', 
	    'default' => '',
	    'label' => ('Top Information'),
	    'type' => 'text',
	));
		
	$wp_customize->add_control('top_information', array(
        'label'      => __('Information', 'wiltonwings'),
        'section'    => 'Info Header Top',
        'settings'   => 'top_information',
    ));
 

}
add_action( 'customize_register', 'wiltonwings_customize_top' );