<?php
/**
 * Plugin Name: Elementor Currency Control
 * Description: Add new Elementor control for currencies selection.
 * Plugin URI:  https://bajoski34.com/
 * Version:     1.0.0
 * Author:      Olaobaju Abraham Jesulayomi
 * Author URI:  https://github.com/bajoski34
 * Text Domain: elementor-currency-control
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Register Currency Control.
 *
 * Include control file and register control class.
 *
 * @since 1.0.0
 * @param \Elementor\Controls_Manager $controls_manager Elementor controls manager.
 * @return void
 */
function register_currency_control( $controls_manager ) {

	require_once( __DIR__ . '/controls/currency.php' );

    $controls_manager->register( new \Elementor_Currency_Control() );

}
add_action( 'elementor/controls/register', 'register_currency_control' );

/**
 * Register Currency Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_currency_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/currency-widget.php' );

	$widgets_manager->register( new \Elementor_Currency_Widget() );

}
add_action( 'elementor/widgets/register', 'register_currency_widget' );