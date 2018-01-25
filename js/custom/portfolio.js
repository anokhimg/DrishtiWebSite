jQuery(document).ready(function( $ ) {
 "use strict";
		$('#grid-container').cubeportfolio({
			filters: '#filters-container',
			loadMore: '#js-loadMore-juicy-projects',
			loadMoreAction: 'click',
			layoutMode: 'grid',
			defaultFilter: '*',
			animationType: 'fadeOutTop',
			gapHorizontal: 1,
			gapVertical: 1,
			gridAdjustment: 'responsive',
			mediaQueries: [{
				width: 1500,
				cols: portfolio.column
			}, {
				width: 1100,
				cols: portfolio.column
			}, {
				width: 800,
				cols: 3
			}, {
				width: 480,
				cols: 2
			}, {
				width: 320,
				cols: 1
			}],
			caption: 'zoom',
			displayType: 'lazyLoading',
			displayTypeSpeed: 100,

			// lightbox
			lightboxDelegate: '.cbp-lightbox',
			lightboxGallery: true,
			lightboxTitleSrc: 'data-title',
			lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

			// singlePage popup
			singlePageInlineDelegate: '.cbp-singlePageInline',
			singlePageInlinePosition: 'below',
			singlePageInlineInFocus: true,
			singlePageInlineCallback: function(url, element) {
				// to update singlePage content use the following method: this.updateSinglePage(yourContent)
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