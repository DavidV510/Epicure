<?php 

    function epicure_options(){
        add_menu_page( 'epicure','Epicure Orders', 'administrator','epicure_options', 'epicure_orders','',30);
    }

    add_action('admin_menu','epicure_options');

    function epicure_orders(){ ?>

        <div class="wrap">
        <h1>Orders</h1>
            <table class="wp-list-table widefat stripped">
                <thead>
                    <tr>
                        <th class="manage-column">ID</th>
                        <th class="manage-column">Name</th>
                        <th class="manage-column">Date Of Orders</th>
                        <th class="manage-column">Email</th>
                        <th class="manage-column">Phone</th>
                        <th class="manage-column">Item List</th>
                        <th class="manage-column">Total Price</th>
                        <th class="manage-column">Remove</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                
                    global $wpdb;
                    $table=$wpdb->prefix.'orders';

                    $orders=$wpdb->get_results("SELECT * FROM $table",ARRAY_A);// assostive array

                    foreach($orders as $res) { ?>

                        <tr>
                            <td>
                            <?php echo $res['id']; ?>
                            </td>
                        
                            <td>
                            <?php echo $res['name']; ?>
                            </td>
                        
                            <td>
                            <?php echo $res['date']; ?>
                            </td>
                        
                            <td>
                            <?php echo $res['email']; ?>
                            </td>
                       
                            <td>
                            <?php echo $res['phone']; ?>
                            </td>

                            <td>
                            <?php echo $res['ItemList']; ?>
                            </td>

                            <td>
                            <?php echo $res['totalPrice']; ?>
                            </td>


                            <td>
                            <a href="#" class="remove_res" data-reservation="<?php echo $res['id']; ?>">
                              Remove
                            </a>
                            </td>
                        </tr>

                  <?php  } ?>
                
                </tbody>
            </table>
        </div>
        
   <?php } ?>


