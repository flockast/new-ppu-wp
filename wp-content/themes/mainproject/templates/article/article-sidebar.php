<div class="oneNew">
  <div class="leftSide">
    <a href="<?php the_permalink(); ?>" class="photo">
      <?php the_post_thumbnail(array(360, 360), array('class' => 'size-full wp-image-' . get_the_ID())); ?>
    </a>
  </div>
  <div class="rightSide">
    <a class="title"><?php the_title(); ?></a>
    <div class="date"><i class="fa fa-calendar"></i> <?php the_time('d.m.Y'); ?></div>
  </div>
</div>