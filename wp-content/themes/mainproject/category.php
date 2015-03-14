<?php get_header(); ?>
<div class="mainContent">
	<input type="hidden" name="data-file" value="category.php">

	<h2><span><?php echo single_cat_title( '', false ); ?></span></h2>

	<?php if (have_posts()): ?>
		<div class="listPosts">
			<?php while (have_posts()): the_post(); ?>
				<?php get_template_part('templates/articles/article', 'category'); ?>
    	<?php endwhile; ?>
		</div>
 <?php endif; ?>
  <?php wp_reset_query(); ?>

</div>
<div class="mainSidebar">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>