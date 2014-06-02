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
			'before_widget' => '<li class="widget-content">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'));
	}
<<<<<<< HEAD
	function wpt_register_js() {
	    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
	    wp_enqueue_script('jquery.bootstrap.min');
	}
	add_action( 'init', 'wpt_register_js' );

=======
>>>>>>> norman
	
	
?>