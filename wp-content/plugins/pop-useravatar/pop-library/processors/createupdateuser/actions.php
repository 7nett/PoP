<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_ACTION_USERAVATAR_UPDATE', PoP_TemplateIDUtils::get_template_definition('action-useravatar-update'));

class PoP_UserAvatar_Template_Processor_UserActions extends GD_Template_Processor_ActionsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_ACTION_USERAVATAR_UPDATE,
		);
	}

	protected function get_actionexecuter($template_id) {
	
		switch ($template_id) {

			case GD_TEMPLATE_ACTION_USERAVATAR_UPDATE:

				return GD_DATALOAD_ACTIONEXECUTER_USERAVATAR_UPDATE;
		}

		return parent::get_actionexecuter($template_id);
	}

	protected function get_iohandler($template_id) {
	
		switch ($template_id) {

			case GD_TEMPLATE_ACTION_USERAVATAR_UPDATE:

				return GD_DATALOAD_IOHANDLER_FORM;
		}

		return parent::get_iohandler($template_id);
	}

	function get_settings_id($template_id) {
	
		switch ($template_id) {

			case GD_TEMPLATE_ACTION_USERAVATAR_UPDATE:

				return GD_TEMPLATE_BLOCK_USERAVATAR_UPDATE;
		}

		return parent::get_settings_id($template_id);
	}
}


/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new PoP_UserAvatar_Template_Processor_UserActions();