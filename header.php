<!DOCTYPE html>
<head>
<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preload" href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

      <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
       insert menu

        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
      <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
	    <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>
      <?php wp_head(); ?>
      </head>