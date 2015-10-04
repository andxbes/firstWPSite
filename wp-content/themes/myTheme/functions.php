<?php

/***
 * подкулючаем скрипты и стили  
 ***/
function load_styles_and_scripts() {
	wp_enqueue_script('jquery','https://code.jquery.com/jquery-2.1.4.min.js');
	wp_enqueue_script('myScript' , get_template_directory_uri().'/js/script.js');
	wp_enqueue_script('bootstup' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
	
	
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
	wp_enqueue_style('bootstrapTheme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css' );
	wp_enqueue_style('style1', get_template_directory_uri().'/css/l2.css' );
	wp_enqueue_style('style2', get_template_directory_uri().'/css/screen960.css' );
	
}

add_action(wp_enqueue_scripts(), load_styles_and_scripts());


/***
 * подключаем меню  
 ***/
register_nav_menu( "header-menu", "Самое верхнее меню" );


function topmenu() {
	$setting = array(
		'menu' => 'header-menu',
		'menu_class'=> 'menuList',
	);
	wp_nav_menu($setting);
}

/***
 * делаем возможным подключение миниатюр записи   
 ***/
add_theme_support('post-thumbnails');