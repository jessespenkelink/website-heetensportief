(function ($, root, undefined) {

	$(function () {
		$('.metaslider .slides li').each(function () {
            $(this).children('img').after("<div class='slide-overlay'></div>");
		});
	});

})(jQuery, this);
