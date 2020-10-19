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
        
        <select id="dishes" >
        <option value="breakfast_dishes" default>Breakfast</option>
        <option value="lunch_dishes">Lunch</option>
        <option value="dinner_dishes">Dinner</option>
        </select>
        
        <?php
        echo get_Dishes();
        ?>
            <?php 
            
            $lunchDishes=get_field('lunch_dishes');
            foreach($lunchDishes as $lunch):
                echo $lunch->post_title;
            endforeach; 
            
            ?>
        </div>
    </div>
   


<?php endwhile; ?>
<?php get_footer(); ?>