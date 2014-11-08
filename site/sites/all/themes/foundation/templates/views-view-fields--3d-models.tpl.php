<?php 
	drupal_add_js(drupal_get_path('theme', 'foundation') . '/js/3dmodel-gallery.js');	
	
	$affaliate_link = "?referral=MichaelTaylor3D";
	$nid = strip_tags($fields['nid']->content);
	$node = node_load($nid);
	$node_wrapper = entity_metadata_wrapper('node', $node);
	$image = $node_wrapper->field_image->value();
	$link = $node_wrapper->field_link->value();
	$id = "3d-model-".strip_tags($fields['counter']->content);
?>

<a href="#<? print $id ?>" class="fancybox">
	<img typeof="foaf:Image" src="<? print image_style_url('3d_model', $image['uri']) ?>" />
</a>

<div id="<? print $id ?>" style="display: none;">
	<center>
		<img src="<? print image_style_url('3d_model_large', $image['uri']) ?>" />
		<h1><? print $node->title ?></h1>
		<a href="<? print $link['url'].$affaliate_link ?>" target="_blank">
			<div class="meetme button">			
				<? print $link['title'] ?>			
			</div>	
		</a>
	</center>
</div>	