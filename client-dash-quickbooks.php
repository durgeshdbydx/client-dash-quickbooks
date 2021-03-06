<?php
/*
Plugin Name: Client Dash Quickbooks Add-on
Description: Integrates Intuit's Quickbooks Online information with Client Dash
Version: 0.1
Author: Kyle Maurer
Author URI: http://realbigmarketing.com/staff/kyle
*/

class CDQBO {

	public function __construct() {
		add_action('admin_notices', array( $this, 'notices' ) );
		add_filter('cd_tabs', array( $this, 'add_tab' ) );
		add_action('cd_account_billing_tab', array( $this, 'tab_contents' ) );
	}

	// Notices for if CD is not active
	public function notices() {
		if (!is_plugin_active( 'client-dash/client-dash.php' )) {
		echo '<div class="error">Client Dash Quickbooks Online requires <b>Client Dash</b>. Please install and activate <b>Client Dash</b> to continue using.</div>';
		}
	}

	// Add the billing tab
	public function add_tab( $tabs ) {
	$tabs['account']['Billing'] = 'billing';
	return $tabs;
	}

	// Insert the tab contents
	public function tab_contents() {
		echo 'test';
	}
}
$cdqbo = new CDQBO;