(function ($) {

	"use strict";

	var fullHeight = function () {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function () {
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$(".toggle-password").click(function () {

		$(this).toggleClass("fa-eye fa-eye-slash");
		var pwdType = $("#usrPwd").attr("type");
		if (pwdType == "password") {
			$("#usrPwd").attr("type", "text");
		} else {
			$("#usrPwd").attr("type", "password");
		}
	});

})(jQuery);
