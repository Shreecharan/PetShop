
<?php  
   ob_start();
 session_start();  

 include('./firebase/index.php');
 $path = "product_info";
 $data =  $database->getReference($path)->getValue();
if(isset($_POST["product_id"]))  
 {  

      $order_table = '';  
      $message = '';  
      if($_POST["action"] == "add")  
      {  

           if(isset($_SESSION["shopping_cart"]))  
           {  
                $is_available = 0;  
                foreach($_SESSION["shopping_cart"] as $keys => $values)  
                {  
                     if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])  
                     {  
                          $is_available++;  
                          $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];  
                     }  
                }  
                if($is_available < 1)  
                {  
                     $item_array = array(  
                          'product_id'               =>     $_POST["product_id"],  
                          'product_name'               =>     $_POST["product_name"],  
                          'product_price'               =>     $_POST["product_price"],  
                          'product_quantity'          =>     $_POST["product_quantity"],
                          'product_image'            =>      $_POST["product_image"]
                     );  
                     $_SESSION["shopping_cart"][] = $item_array;  
                }  
           }  
           else  
           {  
                $item_array = array(  
                     'product_id'               =>     $_POST["product_id"],  
                     'product_name'               =>     $_POST["product_name"],  
                     'product_price'               =>     $_POST["product_price"],  
                     'product_quantity'          =>     $_POST["product_quantity"] ,
                     'product_image '            =>      $_POST["product_image"] 
                );  
                $_SESSION["shopping_cart"][] = $item_array;  
                print_r($_SESSION["shopping_cart"]);
           }  
      }  
      if($_POST["action"] == "remove")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["product_id"] == $_POST["product_id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     $message = '<label class="text-success">Product Removed</label>';  
                }  
           }  
      }  
      if($_POST["action"] == "quantity_change")  
      {   
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])  
                {  
                     $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_POST["quantity"];  
                }  
           }  
      }  
    if(!empty($_SESSION["shopping_cart"]))  
      {  
           $total = 0;  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {           
           $order_table .=  ' 
             <div class="col-lg-3">
              <div class="row">
            <div class="col-md-12">
                  <img src="'.$values["product_image"].'" class="img-pad" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <form>
                    <input type="number" id="number" class="number" value="'.$values["product_quantity"].'" />
                    </form>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <h6>'.$values["product_name"].'</h6>
              <br>
              <small>Seller: PetShopNet</small>
              <br><br>
              <h5>Price: '.$values["product_price"].'</h5>
              <br>
              <h5>Total: '.number_format($values["product_quantity"] * $values["product_price"], 2).'</h5>
              <br>
              <button type="button" name="remove" class="btn btn-danger delete product-key" value="'.$values["product_id"].'">REMOVE</button>
            </div>
            <div class="col-lg-4">
              <small>Delivery 2-3 Days | Free</small>
            </div>';
            $total = $total + ($values["product_quantity"] * $values["product_price"]);
           }  
          
      }  
     ob_end_clean();
      $output = array(  
           'order_table'     =>     $order_table,  
           'cart_item'          =>     count($_SESSION["shopping_cart"])  
      );  
      echo json_encode($output);  
 }
 ?>
