	<?php $pagesection_templates = array(
		GD_TEMPLATE_PAGESECTION_HOME, 
		GD_TEMPLATE_PAGESECTION_TAG, 
		GD_TEMPLATE_PAGESECTION_PAGE, 
		GD_TEMPLATE_PAGESECTION_SINGLE, 
		GD_TEMPLATE_PAGESECTION_AUTHOR, 
		GD_TEMPLATE_PAGESECTION_404
	); ?>
	<div id="<?php echo GD_TEMPLATEID_PAGESECTIONID_MAIN ?>" data-frametarget="<?php echo GD_URLPARAM_TARGET_MAIN ?>" data-merge-container="#<?php echo GD_TEMPLATEID_PAGESECTIONID_MAIN ?>-merge" data-offcanvas="main" class="main pop-merge <?php echo implode(' ', $pagesection_templates); ?>">
		<div id="main" class="container-fluid perfect-scrollbar-offsetreference">
			<div class="tab-content pop-merge-target" id="<?php echo GD_TEMPLATEID_PAGESECTIONID_MAIN ?>-merge"><?php echo PoP_ServerSideRendering_Utils::render_pagesection(GD_TEMPLATEID_PAGESECTIONSETTINGSID_MAIN) ?></div>
		</div>
	</div>