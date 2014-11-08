<?php 
  drupal_add_js(drupal_get_path('theme', 'foundation') . '/js/jquery.githubRepoWidget.min.js');
  drupal_add_css(drupal_get_path('theme', 'foundation') . '/css/style-source.css.less');
  $wrapper = $node_wrapper = entity_metadata_wrapper('node', $node);
?>

<div class="github-widget" data-repo="<? print $wrapper->field_location->value() ?>"></div>