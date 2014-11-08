<?php
	$wrapper = entity_metadata_wrapper('node', $node);
	$image = $wrapper->field_image->value();
?>

<div class="banner">
	<img src="<?php print file_create_url($image['uri']) ?>" alt="<?php print $image['alt'] ?>" >
	<div class="title">
		<?php print $image['title'] ?>
	</div>
</div>

