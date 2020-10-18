<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Epicure Theme</title>
    <?php wp_head(); ?>
    <style>
        html{
            margin-top: 0px !important;
        }
    </style>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/css/fluidbox.min.css" integrity="sha512-1gVXQF5Q9gL1HvHBLK0y3IAWCorLY9EU+JMTsLBlXgWfgf6EIS/8B27R/nUq1joeKz2N7ZHCNnLCjc+PuqDqDA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js" integrity="sha512-0kQqdmb3fpKtRwrbCZDlmiwuZgDyPAOLDOu/HyAt4py7lAVDXKknqtqS6dFNV8U8JrHZymQxlO9SFPZ2u8dhMw==" crossorigin="anonymous"></script>

</head>
<body>

<header class="head">

  <div class="headContainer">
        <div class="cont desktop">
            <div class="left">
                <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img class="logo-img" src="<?php echo get_template_directory_uri()."/img/logo.png" ?>">
                </a>
                <p>EPICURE</p>
                </div>

                <div class="menu">
                <?php wp_nav_menu(array('theme_location'=>'main-menu')); ?>
                </div>
            </div>

            <div class="right">
                <div class="search">
                <form class="search-form" method="get" action="<?php echo home_url(); ?>" role="search">
                    <input class="search-input" type="search" name="s" placeholder="<?php _e('Search for restaurant cuisine, chef');?>">
                    <button class="search-button" type="search" role="button"></button>
                </form>
                </div>

                <div class="user">
                <img class="user-img" src="<?php echo get_template_directory_uri()."/img/user.png" ?>">
                </div>

                <div class="bag">
                <img class="bag-img" src="<?php echo get_template_directory_uri()."/img/bag.png" ?>">
                </div>
            </div>
        </div>

        <div class="mobile">
           <div class="showMenu">

               <div class="toggle">

              </div>

                <div class="home">
                        <a href="<?php echo home_url(); ?>">
                            <img class="logo-img" src="<?php echo get_template_directory_uri()."/img/logo.png" ?>">
                        </a>
                </div>

                <div class="icons">

                        <div class="searchIcon">
                          <img class="user-img" src="<?php echo get_template_directory_uri()."/img/search-icon.svg" ?>">
                        </div>

                        <div class="user">
                            <img class="user-img" src="<?php echo get_template_directory_uri()."/img/user.png" ?>">
                        </div>

                        <div class="bag">
                            <img class="bag-img" src="<?php echo get_template_directory_uri()."/img/bag.png" ?>">
                        </div>
                </div>

           </div>
            
           <div class="hiddenMenu">
               <div class="close">
                  <img class="user-img" src="<?php echo get_template_directory_uri()."/img/x.svg" ?>">
               </div>
               <div class="menu">
                   <?php wp_nav_menu(array('theme_location'=>'mobile1-menu')); ?>
                </div>

                <div class="secondMenu">
                   <?php wp_nav_menu(array('theme_location'=>'mobile2-menu')); ?>
                </div>
           </div>


            <div class="searchMobile">
                <form class="search-form" method="get" action="<?php echo home_url(); ?>" role="search">
                        <input class="search-input" type="search" name="s" placeholder="<?php _e('Search for restaurant cuisine, chef');?>">
                        <button class="search-button" type="search" role="button"></button>
                </form>
            </div>

        </div>

        
  </div>

</header>