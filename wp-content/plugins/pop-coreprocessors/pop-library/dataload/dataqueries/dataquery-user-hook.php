<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Data Load Library
 *
 * ---------------------------------------------------------------------------------------------------------------*/
 
class POP_DataQuery_UserHook extends GD_DataQuery_UserHookBase {

	function get_nocachefields() {

		return array(
			'followers-count',
		);
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new POP_DataQuery_UserHook();
