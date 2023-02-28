<?php
/*
Plugin Name: SiteSync
Description: Synchronize database and uploads folder between sites
Author: Colovic Vladan
Version: 1.7.3
Author URI: https://www.cvladan.com
Plugin URI: http://github.com/cvladan/sitesync
Network: True
*/

require __DIR__ . '/vendor/autoload.php';

$GLOBALS['wpsdb_meta']['wp-sync-db']['version'] = '1.7';
$GLOBALS['wpsdb_meta']['wp-sync-db']['folder'] = basename( plugin_dir_path( __FILE__ ) );

define( 'WPSDB_ROOT', plugin_dir_url(__FILE__) );

define( 'PLUGIN_SLUG', 'sitesync');
define( 'QUERY_VAR_NAME_PROFILE', 'profile');

define( 'SS_OPTION_SETTINGS', 'sitesync_settings');
define( 'SS_OPTION_ERRORLOG', 'sitesync_errorlog');

// Define the directory seperator if it isn't already
if( !defined( 'DS' ) ) {
  if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
    define('DS', '\\');
  }
  else {
    define('DS', '/');
  }
}

# GitHub update checks
#
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker( 'https://github.com/cvladan/sitesync/', __FILE__, 'sitesync' );

# Set the branch that contains the stable release.
# $myUpdateChecker->setBranch('stable-branch-name');

# Optional: If you're using a private repository, specify the access token like this:
# $myUpdateChecker->setAuthentication('your-token-here');

function wp_sync_db_loaded() {
  // if neither WordPress admin nor running from wp-cli, exit quickly to prevent performance impact
  if ( !is_admin() && ! ( defined( 'WP_CLI' ) && WP_CLI ) ) return;

  require_once 'class/wpsdb-base.php';
  require_once 'class/wpsdb-addon.php';
  require_once 'class/wpsdb.php';

  global $wpsdb;
  $wpsdb = new WPSDB( __FILE__ );
}

add_action( 'plugins_loaded', 'wp_sync_db_loaded' );

function wp_sync_db_init() {
  // if neither WordPress admin nor running from wp-cli, exit quickly to prevent performance impact
  if ( !is_admin() && ! ( defined( 'WP_CLI' ) && WP_CLI ) ) return;

  load_plugin_textdomain( 'wp-sync-db', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'init', 'wp_sync_db_init' );


require_once 'module-cli/_load.php';
require_once 'module-media-files/_load.php';