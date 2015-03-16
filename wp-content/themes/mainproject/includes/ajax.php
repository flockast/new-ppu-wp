<?php

add_action("wp_ajax_AddMorePosts", "AddMorePosts");
add_action("wp_ajax_nopriv_AddMorePosts", "AddMorePosts");
 
function AddMorePosts(){

	$args = array(
      'post_type' => 'post',
      'status'    => 'publish'
		);

	if(isset($_POST['countPosts']) && !empty($_POST['countPosts'])) $args['offset'] = $_POST['countPosts'];
	if(isset($_POST['catTitle']) && !empty($_POST['catTitle'])) $args['category_name'] = $_POST['catTitle'];

	query_posts($args);

	if (have_posts()) {
		echo get_template_part('templates/articles/article', 'category');
	}
	
	die();
}