<?php get_header(); ?>

<div class="mainContent full">
	<input type="hidden" name="data-file" value="archive-products.php">
	<h2 class="pageTitle"><span>Компоненты, оборудование и комплектующие</span></h2>
	<?php
		$args = array(
				'post_type' => 'products',
				'post_status' => 'publish', 
				'posts_per_page' => -1
			);

		$query = new WP_Query($args);

	?>

	<?php if( $query->have_posts() ) : ?>
		<div class="pageProducts">
			<?php while($query->have_posts() ) : $query->the_post(); ?>
				<div class="oneProduct">
				  <div class="productImage">
				    <a href="<?php the_permalink(); ?>">
				    	<?php the_post_thumbnail(); ?>
				    </a>
				  </div>
				  <div class="productTitle">
				    <a href="#"><?php the_title(); ?></a>
				  </div>
				  <div class="productPrice"><?php the_field('price'); ?> руб.</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	<?php endif; ?>
</div>
<?php get_footer(); ?>