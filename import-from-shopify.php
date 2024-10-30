<?php
/*
Plugin Name:	Import From Shopify
Description:	This plugins allows to import from Shopify CSV customers, orders to WordPress database automatically
Version:		1.0.2
Author:			CubyDev
Author URI: 	https://cubydev.com
License:     	GPL2
License URI: 	https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:    import-from-shopify
Domain Path:    /languages
*/
if ( ! defined( 'ABSPATH' ) ) exit;

require_once( "inc/functions.php" );
require_once( "inc/ShopifyGeneral.class.php" );
require_once( "inc/ShopifyCustomer.class.php" );
require_once( "inc/ShopifyProduct.class.php" );
require_once( "inc/CDShopifyPluginSettings.class.php" );

$ShopifyCustomer    = new ShopifyCustomer;
$ShopifyProduct		= new ShopifyProduct;

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'cd_add_action_links' );

function cd_add_action_links ( $links ) {
    $mylinks = array(
        '<a href="' . admin_url( 'tools.php?page=import-from-shopify' ) . '">' . __('Settings', 'import-from-shopify') . '</a>',
    );
    return array_merge( $links, $mylinks );
}