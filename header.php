<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">

  <head>
    <link href="http://gmpg.org/xfn/11" rel="profile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <title>
      <?php 
        wp_title( '|', true, 'right' );
        bloginfo( 'name' ); 
      ?>
    </title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700|PT+Sans:400">

    <!-- Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico">

    <?php wp_head(); ?>
  </head>

    <body <?php body_class(); ?>>
      
      <!--[if lt IE 7]>
          <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->