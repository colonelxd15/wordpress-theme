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
  <div class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <header class="header-info">
            <div class="logo-placeholder">
              <img src="">
            </div>
                <p><?php bloginfo('name'); ?></p>
                <p><?php bloginfo('description'); ?></p>
          </header>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
        </ul>
      </div>
    </div>
  </div>