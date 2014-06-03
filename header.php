<html>
  <head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  </head>
  <?php 
    if(is_singular() && get_option('thread_comments'))
      wp_enqueue_script('comment-reply');
    wp_head();
   ?>
  <body>
  <nav class="navbar navbar-default" role="navigation">
    <div class="site-title">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
         <?php bloginfo('name'); ?>
      </a>
      <div class="site-description">site description</div>
    </div>

      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

            <?php menu_attr(); ?>
        </div>
  </nav>