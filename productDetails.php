<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <script type="text/javascript" nonce="0b0845a34e5744b4896fa2207eb" src="//local.adguard.org?ts=1584458659052&amp;type=content-script&amp;dmn=mail-attachment.googleusercontent.com&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1"></script>
<script type="text/javascript" nonce="0b0845a34e5744b4896fa2207eb" src="//local.adguard.org?ts=1584458659052&amp;name=AdGuard%20Assistant%20Beta&amp;name=AdGuard%20Popup%20Blocker%20%28Beta%29&amp;name=AdGuard%20Extra%20Beta&amp;type=user-script"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/prodetails.css">

  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
  <script defer src="//code.jquery.com/jquery-1.11.2.js"></script>
  <script defer src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>   

  

  <!-- BootStrap Script -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Font Icons -->
  <script src="https://kit.fontawesome.com/faa27f073b.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase-database.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>
 
</head>

<body>

    <!-- Top Navbar -->
    <section class="topnav">
      <a class="active" href="index.php"><b><i>PetsPlanet</i></b></a>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
      <a href="#about">Track Order</a>
      <a href="#contact">Contact</a>
    <div id="login_att">
    <a href="signin.php" >Sign In</a>
    <a href="signup.php" >Sign up</a>
  </div>
      <button type="submit" class="btn" style="margin-right: 60px;"><i class="fa fa-shopping-cart" aria-hidden="true"> </i> My Cart</button>
      <button onclick="logout()" class="btn" id="user_att" > Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>
    </section>

    <!-- Dropdown Navbar -->
    <section id="dropdown-navbar">
      <div class="row">
        <div class="col-lg-2">
          <div class="dropdown">
            <button class="dropbtn">shop by breed <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
            <div class="dropdown-content">
              <a href="#">beagle</a>
              <a href="#">pug</a>
              <a href="#">boxer</a>
              <a href="#">shih tzu</a>
              <a href="#">great dane</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="dropdown">
            <button class="dropbtn">shop by brand <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
            <div class="dropdown-content">
              <a href="#">royal canin</a>
              <a href="#">farmina</a>
              <a href="#">orijen</a>
              <a href="#">sunseed</a>
              <a href="#">taste of the wild</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="dropdown">
            <button class="dropbtn">shop by pet <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
            <div class="dropdown-content">
              <a href="#">dogs</a>
              <a href="#">cats</a>
              <a href="#">fish</a>
              <a href="#">birds</a>
              <a href="#">small pet</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2">

        </div>
        <div class="col-lg-4">
          <h6 class="center-prop">FREE 2-4 DAY SHIPPING OVER RS.1000! <i class="fa fa-truck" style="color:#ffba00;" aria-hidden="true"></i></h6>
        </div>
      </div>

      </section>

      <hr class="hr">
      <br>
    <?php 
      include('./firebase/index.php'); 
      if (isset( $_GET['key'])) {
        $key = $_GET['key'];
        $ref = "product_info/";
            $data=$database->getReference($ref.$_GET['key'])->getValue();
            //foreach ($data as $key => $value)
            if(!empty($data)){                             
                    
                    
        ?>      
  <section id="signin-body">
    <div class="row">
      <div class="col-lg-5">
        <img src="<?php echo $data['location'];?>" class="product-img" alt="">
      </div>
      <div class="col-lg-7">
        <h2><?php echo $data['pname'];?></h2>
        <br>
        <div class="row">
          <div class="col-lg-6">
            <h1><?php echo $data['price'];?> <span style='font-family:Arial;'>&#8377;</span></h1>
          </div>
          <div class="col-lg-6">
            <h3><?php echo $data['status'];?></h3>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-6">
            <h5>Qty</h5>
            <form>
              <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
              <input type="number" id="number" value="0" />
              <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
            </form>
          </div>
          <div class="col-lg-6">
            <button class="btn btn-lg btn-primary btn-block" type="submit" class="add_to_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</button><br>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <h5>Details</h5>
    <hr>
    <ul>
      <li><?php echo $data['description'];?></li>
    </ul>
    <br>

<?php }}
  
 ?>
    <h5>Reviews</h5>
    <hr>
    <ul>
  <?php
    
    $ref = "product_info/".$_GET['key']."/Review";
    $rev = $database->getReference($ref)->getValue();
    if(empty($rev)){
    ?>
      <li>No Reviews Yet</li>
    <?php } 
      else   {
         foreach ($rev as $key => $value) {
      ?>
    <li><b><?php echo $value['user'];?></b></li><br>
    <h5><b><i><?php echo $value['summary'];?></i></b></h5>
    <p><i>"<?php echo $value['review'];?>"</i></p>

    <?php      }
     } 
    ?>
 </ul>
    <br>
    <h5>Write Product Review</h5>
    <hr>
    <br>
    <h5>You're reviewing: <?php echo $data['pname'];?></h5>

    <h4></h4><br>
    <div class="row">
    <form class="form-horizontal" action="review.php" method="post" enctype="multipart/form-data">  
      <div class="col-lg-5">
        <small>Nickname*</small>
        <input type="text" class="form-control" name="user" required ><br>
        <small>Summary*</small>
        <input type="text" class="form-control" name="summary" required ><br>
        <small>Review*</small><br>
         <input type="hidden" name="key" value="<?php echo $_GET['key'] ?>"> 
         <input type="hidden" name="tablename" value="product_info/">
        <textarea name="review" rows="8" cols="70"></textarea><br><br>
        <button type="submit" class="btn btn-primary" name="save">Submit</button>
      </div>
      </form>
    </div>
 </section>

</body>

<script src="script/index.js"></script>
<script type="text/javascript" defer src="script/init-firebase.js"></script>
<script type="text/javascript" defer src="script/signin.js"></script>
<script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
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
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>



</html>
