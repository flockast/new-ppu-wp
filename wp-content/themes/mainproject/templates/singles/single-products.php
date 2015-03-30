<?php get_header(); ?>
<div class="mainContent full">
	<input type="hidden" name="data-file" value="single-products.php">
	<?php if ( have_posts() ) : the_post(); ?>
	<h2 class="pageTitle"><span><?php the_title(); ?></span></h2>
	<div class="pageSingleProduct">
	  <div class="productImage">
	  	<?php the_post_thumbnail(); ?>
	  	<div>
	  		<div class="buttonBuy btn btn-success buttonLeft" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i> Сделать заказ</div>
	  	</div>
	  </div>
	  <div class="productDescription">
	  	<h3>Характеристики:</h3>
	    <div class="table-responsive">
	    	<?php if(get_field('properties')) : ?>
    			<?php 
    				$properties = explode(',', get_field('properties'));
	    			foreach($properties as &$propertie) {
	    				$propertie = explode('-', $propertie);
	    			}
	    		?>
		      <table class="table table-striped">
		        <tbody>
		        	<?php
  		    			foreach($properties as $pr) : ?>
									<tr>
										<td><?php echo $pr[0]; ?></td>
										<td><?php echo $pr[1]; ?></td>
									</tr>
			    		<?php endforeach; ?>
		        </tbody>
		      </table>
	    	<?php endif; ?>
	    </div>
		  <div class="productTextDescription">
		  	<h3>Описание:</h3>
				<?php the_content(); ?>
		  </div>   
	    <div class="price">
	    	<b>Цена:</b> <span class="new"><?php the_field('price'); ?> руб.</span>
	    	<?php if(get_field('old_price')) : ?>
	    		<span class="old"><?php the_field('old_price'); ?> руб.</span>
	    	<?php endif; ?>
	    </div>
			<div class="buttonBuy btn btn-success buttonRight" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i> Сделать заказ</div>
	    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	      <div class="modal-dialog">
	        <div class="modal-content">
	          <form action="#" method="post" id="buyProduct">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	              <h4 class="modal-title" id="myModalLabel">Оформить заказ на «<?php the_title(); ?>»</h4>
	            </div>
	            <div class="modal-body">
	                <input type="hidden" name="name_product" value="<?php the_title(); ?>">
	                <div class="form-group">
	                  <input type="text" name="name" class="form-control" placeholder="Ваше имя">
	                </div>
	                <div class="form-group">
	                  <input type="text" name="contacts" class="form-control" placeholder="Ваши контакты">
	                </div>
	                <div class="form-group">
	                  <label for="count" class="control-label">Количество</label>
	                  <select name="count" class="form-control" id="count">
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                  </select>
	                </div>
	            </div>
	            <div class="modal-footer">
	              <div type="button" class="btn btn-default" data-dismiss="modal">Закрыть</div>
	              <input type="submit" class="btn btn-primary" value="Сделать заказ">
	            </div>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<?php endif; ?>
</div>
<?php get_footer(); ?>