(function(){
	jQuery( document ).ready(function() {
		var blogTitle = jQuery("input[name='blog-title']").val();
		var postdate = jQuery("input[name='post-date']").val();
		jQuery(".header .title").html("<div class='blog'><div class='date'>" 
				+ postdate + "</div>" + blogTitle +"</div>");
		console.log(blogTitle);
	});	
})(jQuery);
