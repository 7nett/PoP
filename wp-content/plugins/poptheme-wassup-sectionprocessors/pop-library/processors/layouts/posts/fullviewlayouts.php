<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Configuration
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_LAYOUT_FULLVIEW_ANNOUNCEMENT', PoP_TemplateIDUtils::get_template_definition('layout-fullview-announcement'));
define ('GD_TEMPLATE_LAYOUT_FULLVIEW_LOCATIONPOST', PoP_TemplateIDUtils::get_template_definition('layout-fullview-locationpost'));
define ('GD_TEMPLATE_LAYOUT_FULLVIEW_FEATURED', PoP_TemplateIDUtils::get_template_definition('layout-fullview-featured'));
define ('GD_TEMPLATE_LAYOUT_FULLVIEW_DISCUSSION', PoP_TemplateIDUtils::get_template_definition('layout-fullview-discussion'));
define ('GD_TEMPLATE_LAYOUT_FULLVIEW_STORY', PoP_TemplateIDUtils::get_template_definition('layout-fullview-story'));
define ('GD_TEMPLATE_LAYOUT_FULLVIEW_BLOG', PoP_TemplateIDUtils::get_template_definition('layout-fullview-blog'));
define ('GD_TEMPLATE_LAYOUT_FULLVIEW_THOUGHT', PoP_TemplateIDUtils::get_template_definition('layout-fullview-thought'));
define ('GD_TEMPLATE_LAYOUT_FULLVIEW_HOMEMESSAGE', PoP_TemplateIDUtils::get_template_definition('layout-fullview-homemessage'));

define ('GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_ANNOUNCEMENT', PoP_TemplateIDUtils::get_template_definition('authorlayout-fullview-announcement'));
define ('GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_LOCATIONPOST', PoP_TemplateIDUtils::get_template_definition('authorlayout-fullview-locationpost'));
define ('GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_DISCUSSION', PoP_TemplateIDUtils::get_template_definition('authorlayout-fullview-discussion'));
define ('GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_STORY', PoP_TemplateIDUtils::get_template_definition('authorlayout-fullview-story'));
define ('GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_FEATURED', PoP_TemplateIDUtils::get_template_definition('authorlayout-fullview-featured'));

define ('GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_ANNOUNCEMENT', PoP_TemplateIDUtils::get_template_definition('singlelayout-fullview-announcement'));
define ('GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_LOCATIONPOST', PoP_TemplateIDUtils::get_template_definition('singlelayout-fullview-locationpost'));
define ('GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_DISCUSSION', PoP_TemplateIDUtils::get_template_definition('singlelayout-fullview-discussion'));
define ('GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_STORY', PoP_TemplateIDUtils::get_template_definition('singlelayout-fullview-story'));
define ('GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_FEATURED', PoP_TemplateIDUtils::get_template_definition('singlelayout-fullview-featured'));

class GD_Custom_Template_Processor_CustomFullViewLayouts extends GD_Template_Processor_CustomFullViewLayoutsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_LAYOUT_FULLVIEW_ANNOUNCEMENT,
			GD_TEMPLATE_LAYOUT_FULLVIEW_LOCATIONPOST,
			GD_TEMPLATE_LAYOUT_FULLVIEW_FEATURED,
			GD_TEMPLATE_LAYOUT_FULLVIEW_DISCUSSION,
			GD_TEMPLATE_LAYOUT_FULLVIEW_STORY,
			GD_TEMPLATE_LAYOUT_FULLVIEW_BLOG,
			GD_TEMPLATE_LAYOUT_FULLVIEW_THOUGHT,
			GD_TEMPLATE_LAYOUT_FULLVIEW_HOMEMESSAGE,
			GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_ANNOUNCEMENT,
			GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_LOCATIONPOST,
			GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_DISCUSSION,
			GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_STORY,
			GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_FEATURED,
			GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_ANNOUNCEMENT,
			GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_LOCATIONPOST,
			GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_DISCUSSION,
			GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_STORY,
			GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_FEATURED,
		);
	}


	
	function get_footer_templates($template_id) {

		$ret = parent::get_footer_templates($template_id);

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_FULLVIEW_ANNOUNCEMENT:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_LOCATIONPOST:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_FEATURED:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_DISCUSSION:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_STORY:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_BLOG:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_THOUGHT:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_HOMEMESSAGE:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_ANNOUNCEMENT:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_LOCATIONPOST:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_DISCUSSION:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_STORY:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_FEATURED:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_ANNOUNCEMENT:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_LOCATIONPOST:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_DISCUSSION:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_STORY:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_FEATURED:

				$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_POSTCONCLUSIONSIDEBAR_HORIZONTAL;
				$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_USERPOSTINTERACTION;
				$ret[] = GD_TEMPLATE_CODEWRAPPER_LAZYLOADINGSPINNER;
				$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_HIGHLIGHTREFERENCEDBY_FULLVIEW;
				$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_REFERENCEDBY_FULLVIEW;
				$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_POSTCOMMENTS;
				break;
		}

		return $ret;
	}

	function init_atts($template_id, &$atts) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_FULLVIEW_ANNOUNCEMENT:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_LOCATIONPOST:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_FEATURED:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_DISCUSSION:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_STORY:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_BLOG:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_THOUGHT:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_HOMEMESSAGE:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_ANNOUNCEMENT:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_LOCATIONPOST:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_DISCUSSION:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_STORY:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_FEATURED:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_ANNOUNCEMENT:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_LOCATIONPOST:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_DISCUSSION:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_STORY:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_FEATURED:

				$this->merge_att(GD_TEMPLATE_LAZYSUBCOMPONENT_HIGHLIGHTREFERENCEDBY_FULLVIEW, $atts, 'previoustemplates-ids', array(
					'data-lazyloadingspinner-target' => GD_TEMPLATE_CODEWRAPPER_LAZYLOADINGSPINNER,
				));
				// $this->add_att(GD_TEMPLATE_CONTENTLAYOUT_HIGHLIGHTREFERENCEDBY_APPENDABLE, $atts, 'show-lazyloading-spinner', true);
				break;
		}

		return parent::init_atts($template_id, $atts);
	}

	function get_sidebar_template($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_FULLVIEW_ANNOUNCEMENT:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_LOCATIONPOST:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_FEATURED:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_DISCUSSION:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_STORY:
			case GD_TEMPLATE_LAYOUT_FULLVIEW_BLOG:	
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_ANNOUNCEMENT:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_LOCATIONPOST:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_DISCUSSION:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_STORY:
			case GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_FEATURED:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_ANNOUNCEMENT:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_LOCATIONPOST:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_DISCUSSION:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_STORY:
			case GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_FEATURED:

				$sidebars = array(
					GD_TEMPLATE_LAYOUT_FULLVIEW_ANNOUNCEMENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_ANNOUNCEMENT,
					GD_TEMPLATE_LAYOUT_FULLVIEW_LOCATIONPOST => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_LOCATIONPOST,
					GD_TEMPLATE_LAYOUT_FULLVIEW_FEATURED => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_FEATURED,
					GD_TEMPLATE_LAYOUT_FULLVIEW_DISCUSSION => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_DISCUSSION,
					GD_TEMPLATE_LAYOUT_FULLVIEW_STORY => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_STORY,
					GD_TEMPLATE_LAYOUT_FULLVIEW_BLOG => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_BLOG,
					GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_ANNOUNCEMENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_ANNOUNCEMENT,
					GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_LOCATIONPOST => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_LOCATIONPOST,
					GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_DISCUSSION => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_DISCUSSION,
					GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_STORY => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_STORY,
					GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_FEATURED => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_FEATURED,
					GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_ANNOUNCEMENT => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_ANNOUNCEMENT,
					GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_LOCATIONPOST => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_LOCATIONPOST,
					GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_DISCUSSION => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_DISCUSSION,
					GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_STORY => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_STORY,
					GD_TEMPLATE_SINGLELAYOUT_FULLVIEW_FEATURED => GD_TEMPLATE_LAYOUT_POSTSIDEBARCOMPACT_HORIZONTAL_FEATURED,
				);

				return $sidebars[$template_id];
		}

		return parent::get_sidebar_template($template_id);
	}
}


/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_Custom_Template_Processor_CustomFullViewLayouts();