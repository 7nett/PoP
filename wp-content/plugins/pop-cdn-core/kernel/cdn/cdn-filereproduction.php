<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Data Load Library
 *
 * ---------------------------------------------------------------------------------------------------------------*/
 
class PoP_CDNCore_FileReproduction extends PoP_Frontend_FileReproductionBase {

    function get_renderer() {
    
		global $pop_cdncore_filerenderer;
		return $pop_cdncore_filerenderer;
	}
}

