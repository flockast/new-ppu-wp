<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div class="row">
	  <div class="inputBlock"><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Поиск по сайту"><i class="fa fa-search"></i></div>
	  <div class="buttonBlock"><input type="submit" id="searchsubmit" value="Найти" class="btn btn-default" /></div>
	</div>
</form>  