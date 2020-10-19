<?php get_header(); ?>

<?php while(have_posts()):the_post(); ?>
<?php $chef=get_field('main_chef')[0];?>
    <div class="resContainer">
    <div class="res-Thumnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

        </div>
        <div class="resDetails">
            <h1><?php the_title(); ?></h1>
            <p><?php echo $chef->post_title; ?></p>
        </div>

        
        <div class="res-Dishes">
        
        <div id="dishes" data-id="<?php echo $post -> ID ?>">
        <button class="dishes-cat" value="breakfast_dishes" default>Breakfast</button>
        <button class="dishes-cat" value="lunch_dishes">Lunch</button>
        <button class="dishes-cat" value="dinner_dishes">Dinner</button>
        </div>
        
        <ul class="theDishes">
            <?php 
            $timeDishes=get_field('breakfast_dishes');
            if(isset($timeDishes)){
                foreach($timeDishes as $dish):
                    $DishPrice=get_field('price',$dish->ID);
                ?>

                <li class='theDish'> 
                    <div class="theDish-Img">
                      <?php echo get_the_post_thumbnail($dish->ID); ?>
                    </div>    
                    
                    <div class="theDish-Title">
                    <?php echo $dish->post_title ?>
                    </div>

                    <div class="theDish-Content">
                    <?php echo $dish->post_content ?>
                    </div>

                    <div class="theDish-Price">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13">
                            <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width=".639">
                                <path d="M1 12V.48h5.253C8.127.453 9.064 1.616 9.064 3.97v4.45"/>
                                <path d="M13.544.48V12H8.291c-1.874.027-2.811-1.136-2.811-3.49V4.06"/>
                            </g>
                        </svg><?php echo $DishPrice; ?>
                    </span>
                    </div>
               </li>

             <?php endforeach; ?>
             <?php } else {
              echo '';
            }?>
        </ul>
        </div>
    </div>
   


<?php endwhile; ?>
<?php get_footer(); ?>