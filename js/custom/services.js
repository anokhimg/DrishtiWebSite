jQuery(document).ready(function( $ ) {
 "use strict";
		$('#services-container').cubeportfolio({
			filters: '#services-filters, #js-filters-lightbox-gallery2',
			loadMore: '#js-loadMore-lightbox-gallery',
			loadMoreAction: 'click',
			layoutMode: 'grid',
			mediaQueries: [{
				width: 1500,
				cols: services.column,
			}, {
				width: 1100,
				cols: services.column,
			}, {
				width: 800,
				cols: services.column,
			}, {
				width: 480,
				cols: 2
			}, {
				width: 320,
				cols: 1
			}],
			defaultFilter: '*',
			animationType: 'rotateSides',
			gapHorizontal: 0,
			gapVertical: 0,
			gridAdjustment: 'responsive',
			caption: 'zoom',
			displayType: 'sequentially',
			displayTypeSpeed: 100,

			// lightbox
			lightboxDelegate: '.cbp-lightbox',
			lightboxGallery: true,
			lightboxTitleSrc: 'data-title',
			lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

			// singlePageInline
			singlePageInlineDelegate: '.cbp-singlePageInline',
			singlePageInlinePosition: 'below',
			singlePageInlineInFocus: true,
			singlePageInlineCallback: function(url, element) {
				// to update singlePageInline content use the following method: this.updateSinglePageInline(yourContent)
				var t = this;

				$.ajax({
						url: url,
						type: 'GET',
						dataType: 'html',
						timeout: 30000
					})
					.done(function(result) {

						t.updateSinglePageInline(result);

					})
					.fail(function() {
						t.updateSinglePageInline('AJAX Error! Please refresh the page!');
					});
			},
		});
});