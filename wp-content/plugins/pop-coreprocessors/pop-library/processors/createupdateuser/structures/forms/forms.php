<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_FORM_USER_CHANGEPASSWORD', PoP_ServerUtils::get_template_definition('form-user-changepwd'));

class GD_Template_Processor_UserForms extends GD_Template_Processor_FormsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_FORM_USER_CHANGEPASSWORD,
			// GD_TEMPLATE_FORM_USERAVATAR_UPDATE,
		);
	}

	function get_inner_template($template_id) {
	
		switch ($template_id) {

			case GD_TEMPLATE_FORM_USER_CHANGEPASSWORD:

				return GD_TEMPLATE_FORMINNER_USER_CHANGEPASSWORD;

			// case GD_TEMPLATE_FORM_USERAVATAR_UPDATE:

			// 	return GD_TEMPLATE_FORMINNER_USERAVATAR_UPDATE;
		}

		return parent::get_inner_template($template_id);
	}
}


/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_Template_Processor_UserForms();