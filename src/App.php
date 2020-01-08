<?php
namespace SkeletonPlugin;

use SkeletonPlugin\Database\GenerateTables;
use SkeletonPlugin\Application\Pages\Handler;
use SkeletonPlugin\Application\AjaxRequests\Handler as AjaxHandler;
use SkeletonPlugin\Application\ScriptStyles\Handler as ScriptStyleHanlder;


class App {
	
	public function __construct() 
	{

		register_activation_hook( SKELETON_PLUGIN_FILE, array($this,'pluginActivationHook' ));
		register_deactivation_hook( SKELETON_PLUGIN_FILE, array($this,'pluginDeactivationHook' ));

		add_action( 'init', array($this, 'initCallback') );

		add_action('admin_menu', array($this,'adminPagesRegister') );

		add_action('admin_enqueue_scripts', array($this,'registerEnqueueAdminScriptsStyles'));


		add_action( 'wp_ajax_handle_ajax_requests', array($this,'handleAjaxRequests' ));
		add_action( 'wp_ajax_nopriv_handle_ajax_requests', array($this,'handleAjaxRequests' ));

	}

	public function pluginActivationHook () 
	{
		$generateTables = new GenerateTables();
		$generateTables->QueryToCreate();
	}

	public function pluginDeactivationHook ()
	{

	}

	public function initCallback() 
	{

	}

	public function adminPagesRegister () 
	{

		$handler = new Handler();

    }

    public function registerEnqueueAdminScriptsStyles ()
	{
		$scriptStyles = new ScriptStyleHanlder();
		$scriptStyles->loadAdminScriptStyles();
	}


	public function handleAjaxRequests() {

		$ajaxHandler = new AjaxHandler();
		$ajaxHandler->handleRequests();
	}
}