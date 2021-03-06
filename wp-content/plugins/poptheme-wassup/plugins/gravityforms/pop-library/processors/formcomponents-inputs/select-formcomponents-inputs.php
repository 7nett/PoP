<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_GF_TEMPLATE_FORMCOMPONENT_TOPIC', PoP_TemplateIDUtils::get_template_definition('gf-field-topic'));

class GD_GF_Template_Processor_SelectFormComponentInputs extends GD_Template_Processor_SelectFormComponentsBase {

	function get_templates_to_process() {
	
		return array(
			GD_GF_TEMPLATE_FORMCOMPONENT_TOPIC,
		);
	}

	function get_label_text($template_id, $atts) {

		switch ($template_id) {
				
			case GD_GF_TEMPLATE_FORMCOMPONENT_TOPIC:
			
				return __('Topic', 'poptheme-wassup');
		}
		
		return parent::get_label_text($template_id, $atts);
	}

	function get_input($template_id, $atts) {

		$options = $this->get_input_options($template_id, $atts);

		// Set the inputs and labels
		switch ($template_id) {
		
			case GD_GF_TEMPLATE_FORMCOMPONENT_TOPIC:
			
				return new GD_FormInput_ContactUs_Topics($options);
		}
		
		return parent::get_input($template_id, $atts);
	}
}


/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_GF_Template_Processor_SelectFormComponentInputs();