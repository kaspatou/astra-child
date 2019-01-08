<?php
/**
 * Astra child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'white', 'themeLangDomain' ),
            'slug' => 'white',
            'color' => '#FFF',
        ),
        array(
            'name' => __( 'mine shaft', 'themeLangDomain' ),
            'slug' => 'mine-shaft',
            'color' => '#4a4a4a',
        ),
        array(
            'name' => __( 'mongoose', 'themeLangDomain' ),
            'slug' => 'mongoose',
            'color' => '#b09f82',
        ),
        array(
            'name' => __( 'pickled bean', 'themeLangDomain' ),
            'slug' => 'pickled-bean',
            'color' => '#8b572a',
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );
