(function(){
	jQuery( document ).ready(function() {
		jQuery(".banner .title").css('top', "40px");
		var title = jQuery(".banner .title").html();
			
		jQuery(".banner .title").html(title 
		+ "<div class='links' style='font-size: 18px; font-weight: bold;'>"
		+ "Jump to my: "
		+ "<a href='#skills'>Skills</a>, "
		+ "<a href='#work'>Work Experiance</a>, "
		+ "<a href='#education'>Education</a>, "
		+ "<a href='#activities'>Activities</a> "
		+ "or <span class='meetme button linkedin'>VIEW PROFILE</span></div>");
		
		jQuery(".meetme.button.linkedin").on("click", function() {
			var linkedIn = "http://www.linkedin.com/pub/michael-taylor/23/492/868/";	
			window.open(linkedIn);
		});
	});	
})(jQuery);
