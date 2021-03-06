"use strict";
(function($){
window.popWaypointsFetchMore = {

	//-------------------------------------------------
	// PUBLIC functions
	//-------------------------------------------------

	waypointsFetchMore : function(args) {
	
		var that = this;
		var pageSection = args.pageSection, /*pageSectionPage = args.pageSectionPage, */block = args.block, targets = args.targets;

		// Fetch more
		jQuery(document).ready( function($) {	

			var waypoints = [];
			var contentLoaded = popManager.isContentLoaded(pageSection, block);

			// Important: do this only after the page finished loading, so that the waypoint doesn't trigger
			// before the JS scripts finished running (it creates issue with overriding topLevelParams)
			targets.each(function() {

				var target = $(this);
				var opts = popWaypoints.getOptions(pageSection, target);

				// enabled attr: fetch data only if the Content has been initialized
				// Eg when not: Lazy Blocks / Aggregators (for these, only trigger waypoint after data is first initialized)
				var waypoint = new Waypoint({
					element: target,
					handler: function(direction) {
						var waypoint = this;
						var target = this.element;
						if (direction == 'down') {

							// Somehow it also triggers waypoint from other tabPanes, so make sure that the waypoint target is really visible
							if (popManager.isHidden(target)) {
								return;
							}

							// Comment Leo 02/10/2015: It's important to trigger the click of the button instead of executing fetchBlock directly,
							// because there are actions associated to the button that need to be triggered. Eg: 'saveLastClicked'
							target.trigger('click');
							// popManager.fetchBlock(pageSection, block, {operation: M.URLPARAM_OPERATION_APPEND});
						}
					}, 
					context: opts.context,
					enabled: contentLoaded,
					offset: 'bottom-in-view'
				});				
				popWaypoints.destroy(pageSection, block, waypoint);

				waypoints.push(waypoint);
			});

			// Refresh the waypoints when it comes back from fetching content
			// Keep it at the top, so that it executes also when popManager.isContentLoaded(block) is false
			// and inits lazy
			block.on('fetchCompleted', function(e) {
				
				var block = $(this);
				// var blockQueryState = popManager.getBlockQueryState(pageSection, block);

				// if (blockQueryState[M.URLPARAM_STOPFETCHING]) {	
				// Update waypoint
				if (popManager.stopFetchingBlock(pageSection, block)) {

					// If stop fetching no need to use the waypoint anymore. Re-enable it only when filtering,
					// since that's the only way to re-fill the content
					$.each(waypoints, function(index, waypoint) {

						if (waypoint.enabled) {
							
							waypoint.disable();
							popWaypoints.reEnable(pageSection, block, waypoint);
						}
					});
				}
				else {

					$.each(waypoints, function(index, waypoint) {

						// This is needed because when firstly !isContentLoaded, it needs to re-enable the waypoint when it first loads the content
						if (!waypoint.enabled) {
							waypoint.enable();
						}

						// Re-enable the waypoint to load again
						waypoint.context.refresh();
					});
				}
			});			
		});
	},
};
})(jQuery);

//-------------------------------------------------
// Initialize
//-------------------------------------------------
popJSLibraryManager.register(popWaypointsFetchMore, ['waypointsFetchMore']);
