<?php get_header(); ?>

<table class="table Cart">
                <thead>
                    <tr>
                        <th class="tHead">Title</th>
                        <th class="tHead">Img</th>
                        <th class="tHead">Side</th>
                        <th class="tHead">Changes</th>
                        <th class="tHead">Quantity</th>
                        <th class="tHead">Price</th>
                    </tr>
                </thead>

                <tbody>
               
                
                <?php send_ItemToCart(); ?>
                      
                
                </tbody>
</table>
<?php get_footer(); ?>