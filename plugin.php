<?php
/*
Plugin Name: Skelton Plugin
Description: Skelton plugin using composer dependency manager.
Author: Shah Rukh
Author URI: http://www.tdevelopers.com
Version: 1.0
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
define( 'SKELTON_PLUGIN_FILE', __FILE__ );
define( 'SKELTON_PLUGIN_DIR_PATH', plugin_dir_path(SKELTON_PLUGIN_FILE ));
define( 'SKELTON_PLUGIN_DIR_URL', plugin_dir_url( SKELTON_PLUGIN_FILE ));
require_once __DIR__."/vendor/autoload.php";
use SkeltonPlugin\App;
$app = new App();