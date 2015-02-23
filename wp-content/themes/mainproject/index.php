<?php get_header(); ?>
<div class="mainContent">
	<input type="hidden" name="data-file" value="index.php">

	<div class="contentCarousel">
    <div id="carousel">
      <div><img src="http://placehold.it/750x300&text=1" alt=""></div>
      <div><img src="http://placehold.it/750x300&text=2" alt=""></div>
      <div><img src="http://placehold.it/750x300&text=3" alt=""></div>
      <div><img src="http://placehold.it/750x300&text=4" alt=""></div>
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
				<?php get_template_part('article', 'category'); ?>
    	<?php endwhile; ?>
		</div>
 <?php endif; ?>

</div>
<div class="mainSidebar">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>