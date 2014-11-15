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

function get_stackoverflow_user_cache() {
	$json = file_get_contents('cache/stackoverflow_user_cache.txt');	
	return json_decode($json);
}

function get_github_stat_cache() {
	$json = file_get_contents('cache/github_users_cache.txt');	
	return json_decode($json);
}

function get_stackoverflow_questions_cache() {
	$json = file_get_contents('cache/stackoverflow_questions_cache.txt');	
	return json_decode($json);
}

function get_stackoverflow_answers_cache() {
	$json = file_get_contents('cache/stackoverflow_answers_cache.txt');	
	return json_decode($json);
}


function get_numberof_stackoverflow_questions() {
	$stackoverflow = get_stackoverflow_questions_cache() ;
	return $stackoverflow->total;
}

function get_stackoverflow_reputation() {
	$stackoverflow = get_stackoverflow_user_cache() ;
	return $stackoverflow->items[0]->reputation;
}

function get_stackoverflow_bronze_badges() {
	$stackoverflow = get_stackoverflow_user_cache() ;
	return $stackoverflow->items[0]->badge_counts->bronze;
}

function get_stackoverflow_silver_badges() {
	$stackoverflow = get_stackoverflow_user_cache() ;
	return $stackoverflow->items[0]->badge_counts->silver;
}

function get_stackoverflow_gold_badges() {
	$stackoverflow = get_stackoverflow_user_cache() ;
	return $stackoverflow->items[0]->badge_counts->gold;
}

function get_stackoverflow_total_badges() {
	return get_stackoverflow_silver_badges() + get_stackoverflow_bronze_badges() + get_stackoverflow_gold_badges();
}

function get_numberof_stackoverflow_answers() {
	$stackoverflow = get_stackoverflow_answers_cache() ;
	return $stackoverflow->total;
}

function print_stackoverflow_header() {
	include_once(DRUPAL_ROOT .'/'.drupal_get_path('theme', 'foundation')."/templates/stackoverflow-header.tpl.php");
}

function get_github_public_repo_count() {
	$github = get_github_stat_cache();
	return $github->public_repos;
}

function get_github_public_gist_count() {
	$github = get_github_stat_cache();
	return $github->public_gists;
}









