<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class PoPTheme_Wassup_CategoryProcessors_Template_SettingsProcessor extends GD_Template_SettingsProcessorBase {

	function get_checkpoints($hierarchy) {

		$ret = array();

		if ($hierarchy == GD_SETTINGS_HIERARCHY_PAGE) {

			return array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS00 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS01 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS02 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS03 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS04 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS05 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS06 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS07 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS08 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS09 => Wassup_SettingsProcessor_CheckpointUtils::get_checkpoint($hierarchy, WASSUP_CHECKPOINT_LOGGEDIN_DATAFROMSERVER),
			);
		}
	
		return parent::get_checkpoints($hierarchy);
	}

	function get_page_blockgroups($hierarchy, $include_common = true) {

		$ret = array();

		// Page or Blocks inserted in Home
		if ($hierarchy == GD_SETTINGS_HIERARCHY_PAGE || $hierarchy == GD_SETTINGS_HIERARCHY_HOME) {

			$pageblockgroups = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS00,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS01,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS02,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS03,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS04,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS05,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS06,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS07,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS08,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_CATEGORYPOSTS09,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS00 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS00,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS01 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS01,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS02 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS02,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS03 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS03,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS04 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS04,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS05 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS05,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS06 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS06,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS07 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS07,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS08 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS08,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS09 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_MYCATEGORYPOSTS09,
			);
			foreach ($pageblockgroups as $page => $blockgroup) {
				
				// Also Default
				$ret[$page]['blockgroups']['default'] = $blockgroup;
			}
		}

		// Author page blocks
		elseif ($hierarchy == GD_SETTINGS_HIERARCHY_AUTHOR) {

			$pageblockgroups = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS00,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS01,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS02,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS03,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS04,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS05,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS06,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS07,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS08,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCKGROUP_TABPANEL_AUTHORCATEGORYPOSTS09,
			);
			foreach ($pageblockgroups as $page => $blockgroup) {
				
				// Also Default
				$ret[$page]['blockgroups']['default'] = $blockgroup;
			}
		}

		return $ret;
	}

	function get_page_blocks($hierarchy, $include_common = true) {

		$ret = array();

		if ($hierarchy == GD_SETTINGS_HIERARCHY_PAGE || $hierarchy == GD_SETTINGS_HIERARCHY_HOME) {

			$default_format_section = PoPTheme_Wassup_Utils::get_defaultformat_by_screen(POP_SCREEN_SECTION);
			$default_format_mycontent = PoPTheme_Wassup_Utils::get_defaultformat_by_screen(POP_SCREEN_MYCONTENT);
			
			$pageblocks_typeahead = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_TYPEAHEAD,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_TYPEAHEAD,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_TYPEAHEAD,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_TYPEAHEAD,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_TYPEAHEAD,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_TYPEAHEAD,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_TYPEAHEAD,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_TYPEAHEAD,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_TYPEAHEAD,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_TYPEAHEAD,
			);
			foreach ($pageblocks_typeahead as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_TYPEAHEAD] = $block;

				if ($default_format_section == GD_TEMPLATEFORMAT_TYPEAHEAD) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}

			$pageblocks_navigator = array(						
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_NAVIGATOR,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_NAVIGATOR,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_NAVIGATOR,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_NAVIGATOR,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_NAVIGATOR,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_NAVIGATOR,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_NAVIGATOR,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_NAVIGATOR,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_NAVIGATOR,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_NAVIGATOR,
			);
			foreach ($pageblocks_navigator as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_NAVIGATOR] = $block;

				if ($default_format_section == GD_TEMPLATEFORMAT_NAVIGATOR) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}

			$pageblocks_addons = array(						
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_ADDONS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_ADDONS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_ADDONS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_ADDONS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_ADDONS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_ADDONS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_ADDONS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_ADDONS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_ADDONS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_ADDONS,
			);
			foreach ($pageblocks_addons as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_ADDONS] = $block;

				if ($default_format_section == GD_TEMPLATEFORMAT_ADDONS) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}

			$pageblocks_details = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_DETAILS,
			);
			foreach ($pageblocks_details as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_DETAILS] = $block;

				if ($default_format_section == GD_TEMPLATEFORMAT_DETAILS) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_simpleview = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_SIMPLEVIEW,
			);
			foreach ($pageblocks_simpleview as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_SIMPLEVIEW] = $block;

				if ($default_format_section == GD_TEMPLATEFORMAT_SIMPLEVIEW) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_fullview = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_FULLVIEW,
			);
			foreach ($pageblocks_fullview as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_FULLVIEW] = $block;

				if ($default_format_section == GD_TEMPLATEFORMAT_FULLVIEW) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_thumbnail = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_THUMBNAIL,
			);
			foreach ($pageblocks_thumbnail as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_THUMBNAIL] = $block;

				if ($default_format_section == GD_TEMPLATEFORMAT_THUMBNAIL) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_list = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_SCROLL_LIST,
			);
			foreach ($pageblocks_list as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_LIST] = $block;

				if ($default_format_section == GD_TEMPLATEFORMAT_LIST) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_carousels = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS00_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS01_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS02_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS03_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS04_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS05_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS06_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS07_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS08_CAROUSEL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_CATEGORYPOSTS09_CAROUSEL,
			);
			foreach ($pageblocks_carousels as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_CAROUSEL] = $block;

				if ($default_format_section == GD_TEMPLATEFORMAT_CAROUSEL) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_mycontent = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_TABLE_EDIT,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_TABLE_EDIT,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_TABLE_EDIT,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_TABLE_EDIT,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_TABLE_EDIT,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_TABLE_EDIT,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_TABLE_EDIT,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_TABLE_EDIT,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_TABLE_EDIT,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_TABLE_EDIT,
			);
			foreach ($pageblocks_mycontent as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_TABLE] = $block;

				if ($default_format_mycontent == GD_TEMPLATEFORMAT_TABLE) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_mycontent_simpleviewpreviews = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_SIMPLEVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_SIMPLEVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_SIMPLEVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_SIMPLEVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_SIMPLEVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_SIMPLEVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_SIMPLEVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_SIMPLEVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_SIMPLEVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_SIMPLEVIEWPREVIEW,
			);
			foreach ($pageblocks_mycontent_simpleviewpreviews as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_SIMPLEVIEW] = $block;

				if ($default_format_mycontent == GD_TEMPLATEFORMAT_SIMPLEVIEW) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_mycontent_fullviewpreviews = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS00_SCROLL_FULLVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS01_SCROLL_FULLVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS02_SCROLL_FULLVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS03_SCROLL_FULLVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS04_SCROLL_FULLVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS05_SCROLL_FULLVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS06_SCROLL_FULLVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS07_SCROLL_FULLVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS08_SCROLL_FULLVIEWPREVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_MYCATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_MYCATEGORYPOSTS09_SCROLL_FULLVIEWPREVIEW,
			);
			foreach ($pageblocks_mycontent_fullviewpreviews as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_FULLVIEW] = $block;

				if ($default_format_mycontent == GD_TEMPLATEFORMAT_FULLVIEW) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
		}

		// Author page blocks
		elseif ($hierarchy == GD_SETTINGS_HIERARCHY_AUTHOR) {

			$default_format_authorsection = PoPTheme_Wassup_Utils::get_defaultformat_by_screen(POP_SCREEN_AUTHORSECTION);
			
			$pageblocks_details = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS00_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS01_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS02_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS03_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS04_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS05_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS06_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS07_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS08_SCROLL_DETAILS,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS09_SCROLL_DETAILS,
			);
			foreach ($pageblocks_details as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_DETAILS] = $block;

				if ($default_format_authorsection == GD_TEMPLATEFORMAT_DETAILS) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_simpleview = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS00_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS01_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS02_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS03_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS04_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS05_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS06_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS07_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS08_SCROLL_SIMPLEVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS09_SCROLL_SIMPLEVIEW,
			);
			foreach ($pageblocks_simpleview as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_SIMPLEVIEW] = $block;

				if ($default_format_authorsection == GD_TEMPLATEFORMAT_SIMPLEVIEW) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_fullview = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS00_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS01_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS02_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS03_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS04_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS05_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS06_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS07_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS08_SCROLL_FULLVIEW,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS09_SCROLL_FULLVIEW,
			);
			foreach ($pageblocks_fullview as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_FULLVIEW] = $block;

				if ($default_format_authorsection == GD_TEMPLATEFORMAT_FULLVIEW) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_thumbnail = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS00_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS01_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS02_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS03_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS04_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS05_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS06_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS07_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS08_SCROLL_THUMBNAIL,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS09_SCROLL_THUMBNAIL,
			);
			foreach ($pageblocks_thumbnail as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_THUMBNAIL] = $block;

				if ($default_format_authorsection == GD_TEMPLATEFORMAT_THUMBNAIL) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
			$pageblocks_list = array(
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS00 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS00_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS01 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS01_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS02 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS02_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS03 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS03_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS04 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS04_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS05 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS05_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS06 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS06_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS07 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS07_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS08 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS08_SCROLL_LIST,
				POPTHEME_WASSUP_CATEGORYPROCESSORS_PAGE_CATEGORYPOSTS09 => GD_TEMPLATE_BLOCK_AUTHORCATEGORYPOSTS09_SCROLL_LIST,
			);
			foreach ($pageblocks_list as $page => $block) {
				$ret[$page]['blocks'][GD_TEMPLATEFORMAT_LIST] = $block;

				if ($default_format_authorsection == GD_TEMPLATEFORMAT_LIST) {
					$ret[$page]['blocks']['default'] = $block;
				}
			}
		}

		// Allow Events Manager to inject the settings for the Map
		$ret = apply_filters('PoPTheme_Wassup_CategoryProcessors_Template_SettingsProcessor:page_blocks', $ret, $hierarchy, $include_common);

		return $ret;	
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new PoPTheme_Wassup_CategoryProcessors_Template_SettingsProcessor();