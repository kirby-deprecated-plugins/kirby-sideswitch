(function($) {
	$.fn.sideswitch = function() {
		return this.each(function() {
			var field = $(this);

			if(field.data('sideswitch')) {
				return true;
			} else {
				field.data('sideswitch', true);
			}

			var sidebar = '';
			sidebar += '<div class="sideswitch sideswitch-sidebar">';
				sidebar += '<div class="sideswitch-button">';
					sidebar += '<i class="fa fa-times"></i>';
				sidebar += '</div>';
			sidebar += '</div>';

			var main = '';
			main += '<div class="sideswitch sideswitch-main">';
				main += '<div class="sideswitch-button">';
					main += '<i class="fa fa-chevron-right"></i>';
				main += '</div>';
			main += '</div>';

			$( main ).prependTo( ".mainbar" );
			$( sidebar ).prependTo( ".sidebar" );

			$( ".sideswitch-button" ).click(function() {
				$('body').toggleClass('sideswitch-closed');
			});
		});
	};
})(jQuery);