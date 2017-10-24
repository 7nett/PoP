<?php
class PoP_ServiceWorkers_Installation {

	function system_generate() {

		// Do not install immediately, but do it only at the end of everything, so that the precache list
		// can have added all the resources from the footer too
		// Because it's added in 'wp_footer', it never gets called if doing output=json, which is alright
		global $pop_serviceworkers_manager;
		add_action('wp_footer', array($pop_serviceworkers_manager, 'generate_files'), 10000);

		// Modify to load all the resources for the Service Workers
		new PoP_ServiceWorkers_Frontend_ResourceLoader_Initialization();
	}
}