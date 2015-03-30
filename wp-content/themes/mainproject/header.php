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
    <?php 
      $description = get_the_content();
    ?>
    <meta property="og:description" content="<?php echo $description; ?>" />   

    <?php endif; ?>    

    <link href="<?php theme_url(); ?>/assets/css/app.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if ( is_user_logged_in() && current_user_can('administrator') ): ?>

    <style>
      body {
        padding-top: 102px;
      }
      .navbar {
        margin-top: 32px;
      }
    </style>

    <?php endif; ?>

    <?php wp_head(); ?>
  </head>
  <body>
    <div class="pageWrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">кубострой<!-- Cтройкуб, skvadro, granit, строительные рецепты, stroi magazine, шуруп, plintus, строй куб --></a>
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
