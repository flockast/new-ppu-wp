<?php get_header(); ?>
<div class="mainContent">
	<input type="hidden" name="data-file" value="search.php">

	<h2 class="pageTitle"><span>Результат поиска</span></h2>
	<?php
		query_posts(array(
			'posts_per_page' => -1
		));
	?>

  <?php if (have_posts()): ?>
    <div class="listPosts">
    	<?php 
			get_template_part('templates/articles/article', 'category');
    	?>
    </div>
  <?php else: ?>
		<p>К сожалению, по вашемо запросу ничего не найдено.</p>
 <?php endif; ?>

</div>
<div class="mainSidebar">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>