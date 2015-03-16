<input type="hidden" name="data-file" value="sidebar.php">
<div class="searchBlock">
  <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div class="row">
      <div class="inputBlock"><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Поиск по сайту"><i class="fa fa-search"></i></div>
      <div class="buttonBlock"><input type="submit" id="searchsubmit" value="Найти" class="btn btn-default" /></div>
    </div>
  </form>   
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
  <h2>Рекомендуем</h2>
  <?php
    $posts = get_posts(array(
      'meta_query' => array(
        array(
          'key' => 'show_in_sidebar',
          'value' => '1',
          'compare' => '=='
        )
      )
    ));
    foreach($posts as $post): setup_postdata($post); ?>
    <div class="oneNew">
      <div class="leftSide">
        <a href="<?php the_permalink(); ?>" class="photo">
          <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
        </a>
      </div>
      <div class="rightSide">
        <a href="<?php the_permalink(); ?>" class="title"><?php echo $post->post_title; ?></a>
        <div class="date"><i class="fa fa-calendar-o"></i> <?php echo get_the_time('d.m.Y', $post->ID); ?></div>
      </div>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
</div>