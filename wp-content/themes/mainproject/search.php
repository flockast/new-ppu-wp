<?php get_header(); ?>
<div class="mainContent">
	<input id="infoPage" type="hidden" name="data-file" value="search.php" data-search="<?php echo $_GET['s']; ?>">

	<h2 class="pageTitle"><span>Результат поиска</span></h2>

  <?php if (have_posts()): ?>
    <div class="listPosts">
			<?php while ( have_posts() ) : the_post(); ?>
		  	<?php get_template_part('templates/articles/article', 'category'); ?>
		  <?php endwhile; wp_reset_query(); ?>
    </div>
  <?php else: ?>
		<p>К сожалению, по вашемо запросу "<?php echo $_GET['s']; ?>" ничего не найдено.</p>
  <?php endif; ?>
</div>
<div class="mainSidebar">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>