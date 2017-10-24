<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Data Load Library
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('POP_RESOURCELOADER_CDN', PoP_ServerUtils::get_template_definition('cdn'));
define ('POP_RESOURCELOADER_CDNTHUMBPRINTS', PoP_ServerUtils::get_template_definition('cdn-thumbprints'));
define ('POP_RESOURCELOADER_CDNCONFIG', PoP_ServerUtils::get_template_definition('cdn-config'));

class PoP_CDNCore_ResourceLoaderProcessor extends PoP_ResourceLoaderProcessor {

	function get_resources_to_process() {

		return array(
			POP_RESOURCELOADER_CDN,
			POP_RESOURCELOADER_CDNTHUMBPRINTS,
			POP_RESOURCELOADER_CDNCONFIG,
		);
	}
	
	function get_filename($resource) {
	
		$filenames = array(
			POP_RESOURCELOADER_CDN => 'cdn',
			POP_RESOURCELOADER_CDNTHUMBPRINTS => 'cdn-thumbprints',
			POP_RESOURCELOADER_CDNCONFIG => 'cdn-config'
		);
		if ($filename = $filenames[$resource]) {
			return $filename;
		}

		return parent::get_filename($resource);
	}
	
	function get_version($resource) {

		switch ($resource) {

			case POP_RESOURCELOADER_CDNCONFIG:
				
				// This script file is dynamically generated getting data from all over the website, so its version depend on the website version
				return pop_version();
		}
	
		return POP_CDNCORE_VERSION;
	}
	
	function get_dir($resource) {
	
		return POP_CDNCORE_DIR.'/js/libraries';
	}
		
	function extract_mapping($resource) {

		// No need to extract the mapping from this file (also, it doesn't exist under that get_dir() folder)
		switch ($resource) {

			case POP_RESOURCELOADER_CDNCONFIG:
				
				return false;
		}
	
		return parent::extract_mapping($resource);
	}
	
	function get_file_url($resource) {

		switch ($resource) {

			case POP_RESOURCELOADER_CDNCONFIG:
				
				global $pop_cdncore_configfile_generator;
				return $pop_cdncore_configfile_generator->get_fileurl();
		}

		return parent::get_file_url($resource);
	}
	
	function get_path($resource) {

		$subpath = PoP_Frontend_ServerUtils::use_minified_resources() ? 'dist/' : '';
		return POP_CDNCORE_URI.'/js/'.$subpath.'libraries';
	}

	function get_jsobjects($resource) {

		$objects = array(
			POP_RESOURCELOADER_CDN => array(
				'popCDN',
			),
			POP_RESOURCELOADER_CDNTHUMBPRINTS => array(
				'popCDNThumbprints',
			),
			POP_RESOURCELOADER_CDNCONFIG => array(
				'popCDNConfig',
			),
		);
		if ($object = $objects[$resource]) {

			return $object;
		}

		return parent::get_jsobjects($resource);
	}
	
	function get_dependencies($resource) {

		$dependencies = parent::get_dependencies($resource);
	
		switch ($resource) {

			case POP_RESOURCELOADER_CDN:

				// Comment Leo: Fix this!!!
				$dependencies[] = POP_RESOURCELOADER_CDNTHUMBPRINTS;
				// $dependencies[] = POP_RESOURCELOADER_POPUTILS;
				$dependencies[] = POP_RESOURCELOADER_CORECDNHOOKS;
				break;
		}

		return $dependencies;
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new PoP_CDNCore_ResourceLoaderProcessor();
