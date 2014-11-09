(function(){
	jQuery( document ).ready(function() {
		jQuery(".banner .title").css('top', "40px");
		var title = jQuery(".banner .title").html();
			
		jQuery(".banner .title").html(title 
		+ "<div class='links' style='font-size: 18px; font-weight: bold;'>"
		+ "<span class='meetme button stackoverflow'>VIEW PROFILE ON STACKOVERFLOW</span> "
		+ "<span class='meetme button github'>VIEW PROFILE ON GITHUB</span></div>");
		
		jQuery(".meetme.button.stackoverflow").on("click", function() {
			var url = "http://stackoverflow.com/users/1603933/michaeltaylor3d";	
			window.open(url);
		});
		
		jQuery(".meetme.button.github").on("click", function() {
			var url = "https://github.com/MichaelTaylor3D";	
			window.open(url);
		});
	});	
})(jQuery);