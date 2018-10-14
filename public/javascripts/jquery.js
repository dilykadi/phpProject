var $ = jQuery;


$(document).ready(function() {
	$(function() {
		$("#selectbasic1").change(function() {
			$(".don").hide();
			$("." + $(this).val()).show();
		});
	});
});