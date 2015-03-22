<?php get_header(); ?>

<div class="mainContent">
	<input type="hidden" name="data-file" value="index.php">

  <div class="contentCarousel">
    <div id="carousel">
      <div><img src="<?php theme_url(); ?>/assets/img/content/top-slider1.jpg" alt=""></div>
      <div><img src="<?php theme_url(); ?>/assets/img/content/top-slider2.jpg" alt=""></div>
      <div><img src="<?php theme_url(); ?>/assets/img/content/top-slider3.jpg" alt=""></div>
    </div>
  </div>

	<h1 class="pageTitle simpleTitle"><span>Рецепты Строительства</span></h1>

  <div class="listPosts">
    <?php renderPostsIndex( getPostsIndex( array(
        'paged' => 1,
        'posts_per_page' => get_option('posts_per_page')
    ))); ?>
  </div>
  <div class="buttonMore btn btn-primary" id="buttonMore">Еще интересных статей</div>

</div>
<div class="mainSidebar">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>