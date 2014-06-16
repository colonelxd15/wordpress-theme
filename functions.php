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

	//Register local Bootstrap
	function wpt_register_js() {
	    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, '3.1.1', true); //loads to footer
	    wp_enqueue_script('jquery.bootstrap.min');
	}


	function wpt_js() {
	    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.0.js', 'jquery');
	    wp_enqueue_script('jquery');
	}

	function wpt_main_js() {
	    wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery');
	    wp_enqueue_script('main');
	}

	add_action( 'init', 'wpt_js' );
	add_action( 'init', 'wpt_main_js' );
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
	
	function pagination(){
		$defaults = array(
			'before'           => '<p>' . __( 'Pages:' ),
			'after'            => '</p>',
			'link_before'      => '',
			'link_after'       => '',
			'next_or_number'   => 'number',
			'separator'        => ' ',
			'nextpagelink'     => __( 'Next page' ),
			'previouspagelink' => __( 'Previous page' ),
			'pagelink'         => '%',
			'echo'             => 1
		);

		wp_link_pages( $defaults );
	}
?>