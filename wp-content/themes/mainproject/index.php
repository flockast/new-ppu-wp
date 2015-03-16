<?php get_header(); ?>

<div class="mainContent">
	<input type="hidden" name="data-file" value="index.php">

  <div class="contentCarousel">
    <div id="carousel">
      <div><img src="<?php theme_url(); ?>/img/content/top-slider1.jpg" alt=""></div>
      <div><img src="<?php theme_url(); ?>/img/content/top-slider2.jpg" alt=""></div>
      <div><img src="<?php theme_url(); ?>/img/content/top-slider3.jpg" alt=""></div>
    </div>
  </div>

	<h1 class="pageTitle simpleTitle"><span>Рецепты Строительства</span></h1>

	<?php
    query_posts(array(
        'post_type' => 'post',
        'status' => 'publish'
    ));
	?>
  <?php if (have_posts()): ?>
    <div class="listPosts">
      <?php get_template_part('templates/articles/article', 'category'); ?>
    </div>
    <div class="buttonMore btn btn-primary" id="buttonMore">Еще интересных статей</div>
  <?php endif; ?>

</div>
<div class="mainSidebar">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>