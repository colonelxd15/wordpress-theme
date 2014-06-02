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
	
	
?>