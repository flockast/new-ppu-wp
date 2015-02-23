<article class="onePost">
	<a href="<?php the_permalink(); ?>"  title="<?php the_title_attribute(); ?>" class="photo">
		<?php the_post_thumbnail(array(360, 360), array('class' => 'size-full wp-image-' . get_the_ID())); ?>
	</a>
	<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
	<div class="desc"><?php the_excerpt(); ?></div>
	<div class="date"><?php the_date('d.m.Y', '<i class="fa fa-calendar"></i> ', '', true); ?></div>
</article>