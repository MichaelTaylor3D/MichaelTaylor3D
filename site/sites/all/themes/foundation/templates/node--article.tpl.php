<?php 	
		$node_wrapper = entity_metadata_wrapper('node', $node);
		$body = $node_wrapper->body->value();
		$timestamp = format_date($node->created ,'custom','m/d/Y');
		drupal_add_js(drupal_get_path('theme', 'foundation') . '/js/article_title_gen.js');		
		$next_nid = foundation_get_next_blog_id($node->nid);	
		$previous_nid = foundation_get_previous_blog_id($node->nid);
?>

<div class="row">
	<div class="large-2 columns">
		<div class="<?print ($previous_nid != 0) ? 'button change-blog-button' : 'change-blog-button inactive' ?>" onclick="location.href='/?q=node/<? print $previous_nid ?>';">
			&#8592; Previous
		</div>
	</div>
	<div class="large-8 centered columns">
		<article>
			<div class="blog-body">
				<? print $body['safe_value'] ?>
			</div>
		</article>		
	</div>
	<div class="large-2 columns">
			<div class="<?print ($next_nid != 0) ? 'button change-blog-button' : 'change-blog-button inactive' ?>" onclick="location.href='/?q=node/<? print $next_nid ?>';">
				Next &#8594;			
			</div>		
		<div class="related-posts">
			<h3>Related Posts</h3>
			<? print views_embed_view('Similar Entries', $display_id = 'block') ?>
		</div>		
			
	</div>
</div>

<input type="hidden" name="blog-title" value="<? print $node_wrapper->title->value() ?>">
<input type="hidden" name="post-date" value="<? print $timestamp ?>">
