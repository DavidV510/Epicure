<?php 
  //  Php Queries
  require get_template_directory().'/inc/queries.php';
  
  function epicure_scripts(){
     wp_enqueue_style('head',get_template_directory_uri().'/css/head.css',NULL,'1.0.0.2.0');
     wp_enqueue_style('foot',get_template_directory_uri().'/css/foot.css',NULL,'1.0.0.2.0');
     wp_enqueue_style('front',get_template_directory_uri().'/css/front.css',NULL,'1.0.0.2.0');
     wp_enqueue_style('category',get_template_directory_uri().'/css/category.css',NULL,'1.0.0.2.0');
     wp_enqueue_style('restaurant',get_template_directory_uri().'/css/restaurant.css',NULL,'1.0.0.2.0');
     wp_enqueue_style('style',get_stylesheet_uri(),array('head','foot','front','category','restaurant'),'1.0.0.2.0');

     wp_enqueue_script('jquery');
     wp_enqueue_script('script', get_template_directory_uri().'/js/script.js',array('jquery'), '1.0.0.1.5',true);
     wp_localize_script(
          'script',
          'admin_ajax',
          array(
              'ajaxurl'=>admin_url('admin-ajax.php'),
          )
      );
  }

  add_action('wp_enqueue_scripts','epicure_scripts');


  function epicure_thumbnail(){
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme','epicure_thumbnail');

  function epicure_menu(){
    register_nav_menus(array(
      'main-menu'=>'Main Menu',
      'mobile1-menu'=>'Mobile1 Menu',
      'mobile2-menu'=>'Mobile2 Menu',
      'footer-menu'=>'Footer Menu',
      'cate-menu'=>'cate menu'
    ));
  };


  add_action('init','epicure_menu');
  
  


?>