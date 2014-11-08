
<div class="blog-teaser">
	
	<!-- Dont Display the hr at the top of the first post -->
	<? if ($fields['counter']->content != '1') : ?>
		<hr>
	<? endif ?>

	<div class="teaser">
		
		<div class="date">
			<? print $fields['created']->content ?>
		</div>
		
		<div class="title">
			<? print $fields['title']->content ?>
		</div>
		
		<div class="summary">
			<? print $fields['body']->content ?>
		</div>
		
		<div class="view-post">
			<a href="<? print $fields['path']->content ?>">View Post</a>
		</div>
		
	</div>
	
</div>
