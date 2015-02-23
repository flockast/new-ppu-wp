<?php get_header(); ?>
<div class="mainContent">
	<input type="hidden" name="data-file" value="search.php">

	<h2 class="topTitle"><span>Результат поиска</span></h2>

	<?php if (have_posts()): ?>
		<div class="listPosts">
			<?php while (have_posts()): the_post(); ?>
				<?php get_template_part('article', 'category'); ?>
    	<?php endwhile; ?>
		</div>
   <?php else: ?>
		<p>К сожалению, по вашемо запросу ничего не найдено.</p>
 <?php endif; ?>

</div>
<div class="mainSidebar">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>