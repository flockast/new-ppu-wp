<?php get_header(); ?>
<div class="mainContent">
	<input type="hidden" name="data-file" value="index.php">

	<div class="contentCarousel">
    <div id="carousel">
      <div><img src="<?php theme_url(); ?>/img/content/slider-1.jpg" alt=""></div>
      <div><img src="<?php theme_url(); ?>/img/content/slider-2.jpg" alt=""></div>
      <div><img src="<?php theme_url(); ?>/img/content/slider-3.jpg" alt=""></div>
    </div>
  </div>

	<h2 class="simpleTitle"><span>Псоледние записи</span></h2>

	<?php
    query_posts(array(
        'post_type' => 'post',
        'status' => 'publish',
        'posts_per_page' => 6,
    ));
	?>

	<?php if (have_posts()): ?>
		<div class="listPosts">
			<?php while (have_posts()): the_post(); ?>
				<?php get_template_part('templates/article/article', 'index'); ?>
    	<?php endwhile; ?>
		</div>
 <?php endif; ?>

</div>
<div class="mainSidebar">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>