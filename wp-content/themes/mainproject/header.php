<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
    <?php if (is_single()) : ?>

    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:description" content="<?php the_field('post_lead'); ?>" />   

    <?php endif; ?>    

    <link href="<?php theme_url(); ?>/css/app.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <?php if(current_user_can('manage_options')): ?>
      <style>
        .pageWrapper .navbar { margin-top: 32px; }
      </style>
    <?php endif; ?>
  </head>
  <body>
    <div class="pageWrapper">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Строительный портал</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php
							$args = array(
							  'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
							  'depth'           => 0
							);
							wp_nav_menu( $args );
						?>
          </div>
        </div>
      </nav>

      <div class="pageSlider">
        <div class="logotype"></div>
      </div>
			<section class="pageContent">
				<div class="container">
				  <div class="row">
