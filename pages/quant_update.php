<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php 

            switch($_POST['action']){
                 case 'add': 
                // for ($i = 0; $i < count($product_ids); $i++){
                    echo "<div>Hello</div>"
                    $query = 'DELETE FROM product  WHERE PRODUCT_ID = 29';
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));	
            // }			
            ?>
    			<script type="text/javascript">alert("Customer Successfully Deleted.");window.location = "customer.php";</script>					
            <?php
    			//break;
            
            
?>