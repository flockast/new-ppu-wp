<?php get_header(); ?>
<div class="mainContent">
	<input type="hidden" name="data-file" value="category.php">

	<h1 class="pageTitle"><span><?php echo single_cat_title( '', false ); ?></span></h1>

	<?php if (have_posts()): ?>
		<div class="listPosts">
		  <?php echo get_template_part('templates/articles/article', 'category'); ?>
		</div>
		<div class="buttonMore btn btn-primary" id="buttonMore" data-cat-title="<?php echo single_cat_title(); ?>">Еще интересных статей</div>
	<?php endif; ?>

</div>
<div class="mainSidebar">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>