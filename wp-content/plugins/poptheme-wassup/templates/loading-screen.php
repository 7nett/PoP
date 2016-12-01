<div class="loadinglogo">
	<?php $gd_logo = gd_logo('large') ?>
	<?php $maxwidth = $gd_logo[1] ?>
	<p>
		<img id="loading-logo" class="img-responsive" src="<?php echo apply_filters('gd_images_loading', $gd_logo[0]) ?>">
	</p>
	<p>
		<i class="fa fa-lg fa-spinner fa-spin"></i>
		<?php 
			printf(
				'<em><strong>%s</strong>, %s</em>', 
				apply_filters('gd_loading_msg', __('Loading pure awesomeness', 'poptheme-wassup')),
				__('please wait...', 'poptheme-wassup')
			); 
		?>
	</p>
	<?php /*
	<div class="progress" style="max-width: 500px; margin: auto;">
		<div id="loadingprogress" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0;">
			<span class="sr-only"><span class="percent">0</span><?php _e('%', 'poptheme-wassup'); ?></span>
		</div>
	</div>
	*/ ?>
</div>