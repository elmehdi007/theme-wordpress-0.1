<!DOCTYPE html>
<html <?PHP language_attributes();?> >
    <head>
         <meta http-equiv="Content-Type" content="text/html" charset="<?php bloginfo('charset') ?>"/>
         <meta name="viewport" content="width=device-width">
         <title><?php echo wp_title() ?></title>
         <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
         <?php  wp_head();?>
          <?php   if(is_single()): ?>
                 <link  href="<?php echo(get_template_directory_uri().'/asset/css/blog.css') ?>" rel="stylesheet"/>
            <?php endif; ?>
            <?php  if(is_404()): ?>
                  <link href="<?php echo get_template_directory_uri(). '/asset/css/404.css' ?>" rel="stylesheet" />
            <?php endif; ?>
             <?php  if(is_search()): ?>
                  <link href="<?php echo get_template_directory_uri(). '/asset/css/search.css' ?>" rel="stylesheet" />
            <?php endif; ?>
    </head> 
    <body>
        
       
        <?php
         require_once 'partial/header.part.php';             
          ?>