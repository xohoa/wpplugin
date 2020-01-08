<?php
namespace SkeltonPlugin\Application\AjaxRequests;


class Handler
{
	public function handleRequests() 
	{
		if(!isset($_REQUEST['load_data'])) {
			echo "go away";
			die();
		}
		// below we will have methods those will handle all the ajax requests in 1 file you can divide this multiple also.
	}
}