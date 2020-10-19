<?php

function get_Dishes() {
    if(isset($_POST['name'])){
  
          $time=$_POST['name'];
          $lunchDishes=get_field($time, $_POST['id']);
          $list="";
          foreach ($lunchDishes as $dish):
           $DishPrice=get_field('price',$dish->ID);
           $list=$list.
           "<li class='theDish'>
           <div class='theDish-Img'>".get_the_post_thumbnail($dish->ID).
           "</div>
           <div class='theDish-Title'>"
           .$dish->post_title.
           "</div>".
           "<div class='theDish-Content'>".
           $dish->post_content.
           "</div>".
           "<div class='theDish-Price'>
           <span><svg xmlns='http://www.w3.org/2000/svg' width='14' height='13' viewBox='0 0 14 13'>
               <g fill='none' fill-rule='evenodd' stroke='#000' stroke-width='.639'>
                   <path d='M1 12V.48h5.253C8.127.453 9.064 1.616 9.064 3.97v4.45'/>
                   <path d='M13.544.48V12H8.291c-1.874.027-2.811-1.136-2.811-3.49V4.06'/>
               </g>
           </svg>".$DishPrice."</span>
           </div>".
           "</li>";
          endforeach;
          $list=$list.'';
          echo  $list;
      }
     
   }
    add_action('wp_ajax_getDishes','get_Dishes');
    add_action('wp_ajax_nopriv_getDishes','get_Dishes')
?>