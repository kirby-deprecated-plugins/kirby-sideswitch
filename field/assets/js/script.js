(function($) {
	$.fn.sideswitch = function() {
		return this.each(function() {
			var field = $(this);

			if(field.data('sideswitch')) {
				return true;
			} else {
				field.data('sideswitch', true);
			}

			var html = '';
			html += '<div class="sideswitch">';
			html += '<div class="sideswitch-button">';
			html += '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
			html += '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
			html += '</div>';
			html += '</div>';

			$( html ).prependTo( ".mainbar" );

			$( ".sideswitch-button" ).click(function() {
				$('body').toggleClass('sideswitch-wide');
			});
		});
	};
})(jQuery);