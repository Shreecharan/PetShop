$(document).ready(function(){ 
      $(document).on('click', '.add_to_cart',function(){  
         
           var product_id = $('#product-key').val();  
           var product_name = $('#product-name').val();  
           var product_price = $('#product-price').val();  
           var product_quantity = $('#number').val();  
           var action = "add";  
           var num= $('.var').val();
           var product_image = $('#product-img').val();
            alert(num);
           if(product_quantity > 0)  
           {  
              $.ajax({  
                     
                     url:"./action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity, 
                          product_image:product_image,    
                          action:action  
                     },  
                     success:function(data)  
                     {  
                         // $('#order_table').html(data.order_table);  
                         // $('.badge').text(data.cart_item);  
                          //alert("Product has been Added into Cart");  
                          //console.log(data.order_table);
                         alert("Product has been Added into Cart"); 
                         }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).val();
           //var product_name = $(this).val();   
           var action = "remove";
           
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"./action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          console.log(data);
                          window.location.reload();
                     }  
                });  

           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.number', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";
            
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"./action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          window.location.reload();
                     }  
                });  
           }  
      });  
 });  