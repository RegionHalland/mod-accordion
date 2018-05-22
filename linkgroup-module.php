<?php
/*
 * Plugin Name: Mod-Linkgroup
 * Plugin URI: -
 * Description: Linkgroup module for Modularity
 * Version: 1.0.0
 * Author: David Öhlin
 */

define('LINKGROUP_MODULE_PATH', plugin_dir_path(__FILE__));

/**
 * Registers the module
 */
add_action('Modularity', function() {
	modularity_register_module(
		LINKGROUP_MODULE_PATH,
		'Linkgroup'
	);

	// Export and import ACF Fields
	$acfExportManager = new \AcfExportManager\AcfExportManager();
	$acfExportManager->setExportFolder(LINKGROUP_MODULE_PATH . 'acf/');
    $acfExportManager->import();
});