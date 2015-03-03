<input type="hidden" name="data-file" value="sidebar.php">
<div class="searchBlock">
  <?php get_template_part('templates/form/form', 'search'); ?>
</div>
<div class="tagsBlock">
	<?php
		$args = array(
			 'smallest'                  => 14
			,'largest'                   => 14
			,'unit'                      => 'px'
			,'number'                    => 0
		); 

		wp_tag_cloud( $args );
	?>
</div>
<div class="mainNews">
  <h2>Главные новости</h2>
  <?php
    $query = new WP_Query(array(
      'post_type' => 'post',
      'meta_query' => array(
        array(
            'key' => 'show_in_sidebar',
            'value' => '1',
        ),
      ),
    ));
    ?>
    <?php while ( $query->have_posts() ): $query->the_post(); ?>
      <?php get_template_part('templates/article/article', 'sidebar'); ?>
    <?php endwhile; wp_reset_postdata(); ?>
</div>