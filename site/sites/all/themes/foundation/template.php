<?php

/*
 * Here we override the default HTML output of drupal.
 * refer to http://drupal.org/node/550722
 */

// Auto-rebuild the theme registry during theme development.
if (theme_get_setting('clear_registry')) {
  // Rebuild .info data.
  system_rebuild_theme_data();
  // Rebuild theme registry.
  drupal_theme_rebuild();
}

function foundation_get_blog_array() {
	$nodes = node_load_multiple(array(), array('type' => 'article'));
	usort($nodes, "cmp");
	return $nodes;
}


function foundation_get_next_blog_id($nid) 
{
	$nodes = foundation_get_blog_array();
	foreach($nodes as $node) {
		if($node->nid > $nid) {
			return $node->nid;
		}
	}
	return 0;
}

function foundation_get_previous_blog_id($nid) 
{
	$nodes = foundation_get_blog_array();
	rsort($nodes);
	foreach($nodes as $node) {
		if($node->nid < $nid) {
			return $node->nid;
		}
	}
	return 0;
}


function cmp($a, $b)
{
    return strcmp($a->nid, $b->nid);
}









