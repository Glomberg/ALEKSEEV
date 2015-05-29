$(document).ready(function(){
	$(".dush :checkbox").on("change", function(){
		if ($(this).prop("checked") == true) {
			$(this).parent().parent(".dush-elements").addClass("checked");
		} else {
			$(this).parent(".dush-elements").removeClass("checked");
		}
	});
	var element = $(".dush");
	var distance = element.offset().top;
	$(window).on("scroll", function(){
		if (distance - ($('body').scrollTop() || $('html').scrollTop()) <= 0) {
			if($(".checked").length > 1) {
				$(".checked:first").addClass("fixed-style");
				$(".checked:not(:first)").addClass("fixed-style").css("top", "75px");
				$(".dush").css("padding-top", "150px");
			} else {
				$(".checked").addClass("fixed-style");
				$(".dush").css("padding-top", "75px");
			}
		} else {
			$(".checked").removeClass("fixed-style");
			$(".dush").removeAttr("style");
		}
	});
});