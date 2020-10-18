<?php 

  function epicure_scripts(){
     wp_enqueue_style('head',get_template_directory_uri().'/css/head.css',NULL,'1.0.0.1.9.5');
     wp_enqueue_style('foot',get_template_directory_uri().'/css/foot.css',NULL,'1.0.0.1.9.5');
     wp_enqueue_style('front',get_template_directory_uri().'/css/front.css',NULL,'1.0.0.1.9.5');

     wp_enqueue_style('style',get_stylesheet_uri(),array('head','foot','front'),'1.0.0.1.9.5');

     wp_enqueue_script('jquery');
     wp_enqueue_script('script', get_template_directory_uri().'/js/script.js',array('jquery'), '1.0.0.0.9',true);
  }

  function epicure_thumbnail(){
    add_theme_support('post-thumbnails');
  }

  function epicure_menu(){
    register_nav_menus(array(
      'main-menu'=>'Main Menu',
      'mobile1-menu'=>'Mobile1 Menu',
      'mobile2-menu'=>'Mobile2 Menu',
      'footer-menu'=>'Footer Menu'
    ));
  };


  add_action('init','epicure_menu');
  add_action('after_setup_theme','epicure_thumbnail');
  add_action('wp_enqueue_scripts','epicure_scripts');

?>