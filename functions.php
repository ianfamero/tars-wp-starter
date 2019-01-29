<?php
function files() {
  wp_enqueue_style('normalize', get_theme_file_uri('css/normalize.css'));
  wp_enqueue_style('tars', get_theme_file_uri('css/tars.css'));
  wp_enqueue_style('style', get_theme_file_uri('css/style.css'));
  wp_enqueue_style('wp-style', get_stylesheet_uri());
  // wp_enqueue_style('fa-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('fa', get_theme_file_uri('extensions/font-awesome/css/font-awesome.min.css'));

  // wp_register_script('jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null, true);
  wp_register_script('jquery', get_theme_file_uri('js/jquery-3.2.1.min.js'), null, null, true);
  wp_register_script('scroll-out', get_theme_file_uri('js/scroll-out.min.js'), null, null, true);
  wp_register_script('scripts', get_theme_file_uri('js/scripts.js'), null, null, true);
  // wp_enqueue_script('jquery-cdn');
  wp_enqueue_script('jquery');
  wp_enqueue_script('scroll-out');
  wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts', 'files');

function after_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'after_setup');

function widgets_init() {
	register_sidebar(array(
		'name'  => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'widgets_init');

