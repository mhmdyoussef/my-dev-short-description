<?php

/**
 * Plugin Name: Short Description to Product Thumbnail
 * Plugin URI: https://egsyntax.com
 * Description: Show Short Description to Product Thumbnail working with WooCommerce plugin
 * Author: Mohamed Youssef
 * Author URI: https://my-dev.pro
 * Version: 1.0.0
 * Require at least: 5.8
 * Require PHP: 7.4
 * Licence: GPLv2 or Later
 */

 if ( ! defined( 'ABSPATH' ) ) exit();

function my_dev_add_short_des() {

    the_excerpt();

}

add_action( 'woocommerce_shop_loop_item_title', 'my_dev_add_short_des', 10 );