<?php
/*
 * Plugin Name: Mod-Accordion
 * Plugin URI: -
 * Description: Accordion module for Modularity
 * Version: 1.0.0
 * Author: David Öhlin
 */

define('ACCORDION_MODULE_PATH', plugin_dir_path(__FILE__));

/**
 * Registers the module
 */
add_action('Modularity', function() {
	modularity_register_module(
		ACCORDION_MODULE_PATH,
		'Accordion'
	);

	// Export and import ACF Fields
	$acfExportManager = new \AcfExportManager\AcfExportManager();
	$acfExportManager->setExportFolder(ACCORDION_MODULE_PATH . 'acf/');
    $acfExportManager->import();
});