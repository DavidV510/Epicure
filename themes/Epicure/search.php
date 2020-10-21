<?php get_header(); ?>

<div class="SearchCont">
<h1>Search</h1>
    <?php echo sprintf(_('%s Search Results for '),$wp_query->found); ?>
    <div class="grid3 the-restaurants container owl-carousel">
      <?php
      while(have_posts()):the_post();?>
       
        <?php if(get_post_type()=='restaurant-menu'){
            echo 'Restaurant';   
        }?>
       
         <?php if(get_post_type()=='dishes'){ ?>
            <ul class="theDishes"><?php 
             get_template_part('template-parts/page','dishSearch'); ?>
            </ul>
         <?php  } ?>
       <?php endwhile; ?>
       
    </div>
</div>
<?php get_footer(); ?>