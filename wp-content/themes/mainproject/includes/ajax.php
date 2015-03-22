<?php

add_action("wp_ajax_AddMorePosts", "AddMorePosts");
add_action("wp_ajax_nopriv_AddMorePosts", "AddMorePosts");
 
function AddMorePosts(){

    $options = array(
            'posts_pre_page' => 2,
            'offset' => ( !empty( $_POST['countPosts'] ) ) ? $_POST['countPosts'] : 0,
            'category_name' => ( !empty( $_POST['catTitle'] ) ) ? $_POST['catTitle'] : ''
        );

    renderPostsIndex( getPostsIndex( $options ) );

    die();

}

function getPostsIndex($options) {

    $paged = ( $options['paged'] ) ? $options['paged'] : 0;

    $posts_per_page  = ($options['posts_per_page']) ? $options['posts_per_page'] : 6;
    $category_name = ($options['category_name']) ? $options['category_name'] : '';

    if($paged != 0) {
        $offset = ($paged - 1) * $posts_per_page;
    } else if($options['offset']) {
        $offset = $options['offset'];
    } else {
        $offset = 0;
    }

    $args = array(
        'post_type' => 'post',
        'status' => 'publish',
        'posts_per_page' => $posts_per_page,
        'offset' => $offset,
        'category_name' => $category_name
    );

    return new WP_Query($args);
}

function renderPostsIndex($q) {
    if( $q->have_posts() ) {
        while( $q->have_posts() ) { $q->the_post();
            get_template_part('templates/articles/article', 'category');
        }
        wp_reset_postdata();
    }
}