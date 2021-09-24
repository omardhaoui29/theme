<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php bloginfo('stylesheet_url') ?> ">
    <title><?php bloginfo('title'); ?></title>
</head>
<body class="body">
    <header class="mainheader">
        <h1 id="blog-title"><?php bloginfo('name') ?></h1>
        <h2 id="blog-desc"><?php bloginfo('description') ?></h2>
        
       <img src="<?php echo get_bloginfo('template_directory') ?>/image/kd7.jpeg">
  
             <nav>
                 <?php wp_nav_menu(); ?>
              </nav>
    </header>


    <div class="maincontent">
        <section class="top-content">
