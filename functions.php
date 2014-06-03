<?php
	if(function_exists('register_sidebar')){
		register_sidebar(array(
			'name' => 'Default Widget Area',
			'id' => 'default-widget-area',
			'before_widget' => '<li class="widget-content">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'));
		register_sidebar(array(
			'name' => 'Right Widget Area',
			'id' => 'widget-area-right',
			'before_widget' => '<li class="widget-content">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'));
		register_sidebar(array(
			'name' => 'Footer Widget Area',
			'id' => 'widget-area-footer',
			'before_widget' => '<div class="widget-content col-md-3">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'));
	}
	//Register and get jQuery from GoogleCDN
	function jqueryjs(){
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '1.11.1',true); //loads to footer
		wp_enqueue_script('jquery');
	}

	//Register local Bootstrap
	function wpt_register_js() {
	    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, '3.1.1', true); //loads to footer
	    wp_enqueue_script('jquery.bootstrap.min');
	}
	
	add_action( 'init', 'jqueryjs' );
	add_action( 'init', 'wpt_register_js' );

	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'wordpress-theme' ),
	) );

	require_once('wp_bootstrap_navwalker.php');

	function menu_attr(){  
		wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        		'container_id'      => 'navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
	}

	add_theme_support('post-thumbnails');
	
	$page_links = array(
		'base'         => '%_%',
		'format'       => '?page=%#%',
		'total'        => 2,
		'current'      => 0,
		'show_all'     => False,
		'end_size'     => 1,
		'mid_size'     => 2,
		'prev_next'    => True,
		'prev_text'    => __('« Previous'),
		'next_text'    => __('Next »'),
		'type'         => 'plain',
		'add_args'     => False,
		'add_fragment' => '',
		'before_page_number' => '',
		'after_page_number' => '');

?>