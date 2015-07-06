/* owl carousel*/
$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			navigation: true,
			navigationText: [
			"<i class='icon-chevron-left icon-white'></i>",
			"<i class='icon-chevron-right icon-white'></i>"
			],
			beforeInit : function(elem){

			}
		});
		$("#nav_button").owlCarousel({
			navigation: true,
			navigationText: [
			"<i class='icon-chevron-left icon-white glyphicon glyphicon-chevron-left'></i>",
			"<i class='icon-chevron-right icon-white glyphicon glyphicon-chevron-right'></i>"
			],
			beforeInit : function(elem){

			}
		});
		
		/*carouserl arrow*/
		var top=($("#nav_button").height()-$("#nav_button .owl-controls .owl-buttons .owl-prev").height())/2;
		$("#nav_button .owl-controls .owl-buttons .owl-prev,#nav_button .owl-controls .owl-buttons .owl-next").css('top',top+'px');
		$("#nav_button").resize(function(){
			var top=($("#nav_button").height()-$("#nav_button .owl-controls .owl-buttons .owl-prev").height())/2;
			$("#nav_button .owl-controls .owl-buttons .owl-prev,#nav_button .owl-controls .owl-buttons .owl-next").css('top',top+'px');
		});
		

});	

/*progress bar*/

(function($) {
	  $.fn.visible = function(partial) {
		  var $t            = $(this),
			  $w            = $(window),
			  viewTop       = $w.scrollTop()-200,
			  viewBottom    = viewTop + $w.height(),
			  _top          = $t.offset().top,
			  _bottom       = _top + $t.height(),
			  compareTop    = partial === true ? _bottom : _top,
			  compareBottom = partial === true ? _top : _bottom;

		return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
	  };
})(jQuery);

$(function() {

	function progress(cls){
		$(cls).each(function(i, el) {
			var el = $(el);
			if (el.visible(true)) {
				if (!$(this).hasClass("comein")) {
				  $(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
					width: $(this).data("origWidth")
					}, 1200);
					$(this).addClass('comein');
				}
			}
		});	
	}
	
	progress('.progress');
	$(".row").each(function(i, el) {
		var el = $(el);
		if (el.visible(true)) {
			//if(i%2==0){ var slide='animated rotateInDownLeft';}else{var slide='animated rotateInDownRight';}
			var slide='animated fadeInUp'
			if (!$(this).hasClass(slide)) {
				$(this).addClass(slide);
				$(this).css('opacity',1);
			}
		} 
	});
	
	$(window).scroll(function(event) {
	  progress('.progress');
	  $(".slide div.col-sm-6").each(function(i, el) {
		var el = $(el);
		if (el.visible(true)) {
			if(i%2==0){ var slide='animated rotateInDownLeft';}else{var slide='animated rotateInDownRight';}
			//var slide='animated rotateInDownLeft'
			if (!$(this).hasClass(slide)) {
				$(this).addClass(slide);
			}
		} 
	  });
	  $(".row").each(function(i, el) {
		var el = $(el);
		if (el.visible(true)) {
			//if(i%2==0){ var slide='animated rotateInDownLeft';}else{var slide='animated rotateInDownRight';}
			//$('#scrollTop').html($(window).height());
			//$('#height').html($(this).height());
			//$('#height').append($(this).attr('class'));
			//if($(window).height()-$(this).height()>400){$(this).css('opacity',1);}
			var slide='animated fadeInUp';
			if (!$(this).hasClass(slide)) {
				$(this).addClass(slide);
				$(this).css('opacity',1);
			}
		} 
	  });
	  
	});
});


