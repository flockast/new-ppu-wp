<input type="hidden" name="data-file" value="sidebar.php">
<div class="searchBlock">
  <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div class="row">
      <div class="inputBlock"><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Поиск по сайту"><i class="fa fa-search"></i></div>
      <div class="buttonBlock"><input type="submit" id="searchsubmit" value="Найти" class="btn btn-default" /></div>
    </div>
  </form>   
</div>
<div class="tagsBlock">
	<?php
		$args = array(
			 'smallest'                  => 14
			,'largest'                   => 14
			,'unit'                      => 'px'
			,'number'                    => 0
		); 

		wp_tag_cloud( $args );
	?>
</div>
<div class="mainNews">
  <h2>Главные новости</h2>
  <div class="oneNew">
    <div class="leftSide">
      <a href="#" class="photo"><img src="img/content/small-new.jpg" alt="New"></a>
    </div>
    <div class="rightSide">
      <a class="title">Новая интересная новость главная, очень интересная</a>
      <div class="date">20.02.2015</div>
    </div>
  </div>
  <div class="oneNew">
    <div class="leftSide">
      <a href="#" class="photo"><img src="img/content/small-new.jpg" alt="New"></a>
    </div>
    <div class="rightSide">
      <a class="title">Новая интересная новость главная, очень интересная</a>
      <div class="date">20.02.2015</div>
    </div>
  </div>
  <div class="oneNew">
    <div class="leftSide">
      <a href="#" class="photo"><img src="img/content/small-new.jpg" alt="New"></a>
    </div>
    <div class="rightSide">
      <a class="title">Новая интересная новость главная, очень интересная</a>
      <div class="date">20.02.2015</div>
    </div>
  </div>
</div>