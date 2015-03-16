<?php get_header(); ?>
<div class="mainContent">
  <input type="hidden" name="data-file" value="single.php">
  <?php if ( have_posts() ) : the_post(); ?>
    <div class="singlePost">
      <div class="singleHeader">
        <div class="singleImage"><?php echo get_the_post_thumbnail(); ?></div>
        <h1 class="singleTitle"><?php the_title(); ?></h1>
        <div class="singlePreview"><?php the_field("short_story"); ?></div>
        <a href="#" class="previewClose" id="previewClose"><i class="fa fa-eye-slash"></i> <span>Скрыть</span></a>
      </div>
      <div class="singleContent">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="singleDate"><i class="fa fa-calendar"></i> Дата: <?php the_time('d.m.Y'); ?></div>
    <div class="singleTags"><i class="fa fa-tags"></i> <?php the_tags('Теги: ',' , ',''); ?></div>
    
    <div class="otherPosts">
      <h3 class="pageTitle simpleTitle"><span>Похожие Записи</span></h3>
<!--       <div class="row">
        <div class="onePost">
          <a href="#">
            <div class="postImage"><img src="img/content/onepost.jpg" alt=""></div>
            <div class="postTitle">Название такое интереснейшее, вот так вот самое то</div>
          </a>
        </div>
        <div class="onePost">
          <a href="#">
            <div class="postImage"><img src="img/content/onepost.jpg" alt=""></div>
            <div class="postTitle">Название такое интереснейшее, вот так вот самое то</div>
          </a>
        </div>               
      </div> -->
      <div class="row">
        <?php $post_prev = get_previous_post(); ?>
        <?php if($post_prev): ?>
          <div class="onePost prev">
            <h4><i class="fa fa-arrow-left"></i> Предыдущая</h4>
            <a href="<?php echo get_permalink($post_prev->ID); ?>">
              <div class="postImage"><?php echo get_the_post_thumbnail( $post_prev->ID ); ?></div>
              <div class="postTitle"><?php echo $post_prev->post_title; ?></div>
            </a>
          </div>
        <?php endif; ?>
        <?php $post_next = get_next_post(); ?>
        <?php if($post_next): ?>
        <div class="onePost next">
        <h4>Следующая <i class="fa fa-arrow-right"></i></h4>
          <a href="<?php echo get_permalink($post_next->ID); ?>">
            <div class="postImage"><?php echo get_the_post_thumbnail( $post_next->ID ); ?></div>
            <div class="postTitle"><?php echo $post_next->post_title; ?></div>
          </a>
        </div>
        <?php endif; ?>                    
      </div>
    </div>    
  <?php endif; ?>
</div>
<div class="mainSidebar">
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>