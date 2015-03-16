<?php while (have_posts()): the_post(); ?>
	<article class="onePost">
		<a href="<?php the_permalink(); ?>"  title="<?php the_title_attribute(); ?>" class="photo">
			<?php //the_post_thumbnail(array(360, 360), array('class' => 'size-full wp-image-' . get_the_ID())); ?>
			<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
		</a>
		<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
		<div class="desc"><?php the_field("short_story"); ?></div>
		<div class="date"><i class="fa fa-calendar"></i> <?php the_time('d.m.Y'); ?></div>
	</article>
<?php endwhile; wp_reset_query(); ?>