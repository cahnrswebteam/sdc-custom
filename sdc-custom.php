<?php namespace cahnrswp\cahnrs\sdc;
/**
 * Plugin Name: SDC Custom
 * Plugin URI:  http://cahnrs.wsu.edu/communications/
 * Description: Core features for SDC
 * Version:     0.1
 * Author:      CAHNRS Communications, Danial Bleile
 * Author URI:  http://cahnrs.wsu.edu/communications/
 * License:     Copyright Washington State University
 * License URI: http://copyright.wsu.edu
 */

class init_sdc_custom {


	public function __construct() {
		$this->define_constants(); // Define constants
		require_once 'controls/autoload_control.php'; // Require autoloader control
		$autoload = new autoload_control(); // Init autoloader to eliminate further dependency on require
	}

	private function define_constants() {
		define( __NAMESPACE__ . '\URL', plugin_dir_url( __FILE__ )  ); // Plugin base URL
		define( __NAMESPACE__ . '\DIR', plugin_dir_path( __FILE__ ) ); // Directory path
	}

	public function init_plugin() {
	}

}

$sdc_custom = new init_sdc_custom();
$sdc_custom->init_plugin();
?>