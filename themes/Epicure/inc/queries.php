<?php

 function get_Dishes() {
  if(isset($_POST['name'])){
      $arg=array(
          'post_type'=>'Restaurant-Menu'
      );
      $res=new WP_Query($arg);

     // while($res->have_posts()):$res->the_post();

        $time=$_POST['name'];
        $lunchDishes=get_field($time);
        foreach($lunchDishes as $dish1):
            echo $dish1->post_title;
        endforeach;


     // endwhile; wp_reset_postdata();
    }
   
 }
  add_action('wp_ajax_getDishes','get_Dishes');
  add_action('wp_ajax_nopriv_getDishes','get_Dishes')
?>