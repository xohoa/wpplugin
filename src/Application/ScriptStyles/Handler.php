<?php
namespace SkeltonPlugin\Application\ScriptStyles;

class Handler
{
	public function loadAdminScriptStyles ()
	{
		$adminScripts = new AdminScripts();
		$adminStyles = new AdminStyles();
	}

	public function loadFrontScriptStyles ()
	{
		$frontScripts = new FrontScripts();
		$frontStyles = new FrontStyles();
	}
}