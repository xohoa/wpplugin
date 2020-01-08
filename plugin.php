<?php
/*
Plugin Name: Skeleton Plugin
Description: Skeleton plugin using composer dependency manager.
Author: Shah Rukh
Author URI: http://www.tdevelopers.com
Version: 1.0
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
define( 'SKELETON_PLUGIN_FILE', __FILE__ );
define( 'SKELETON_PLUGIN_DIR_PATH', plugin_dir_path(SKELETON_PLUGIN_FILE ));
define( 'SKELETON_PLUGIN_DIR_URL', plugin_dir_url( SKELETON_PLUGIN_FILE ));
require_once __DIR__."/vendor/autoload.php";
use SkeletonPlugin\App;
$app = new App();