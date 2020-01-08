<?php
namespace SkeltonPlugin\Database;

class GenerateTables {
	
	public function QueryToCreate() {

		global $wpdb;

		$sql = array();


        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        dbDelta($sql);
	}
}