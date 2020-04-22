<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>PetShop</title>

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
   <input type="text" placeholder="Search.." name="search" autocomplete="off" id="search">
   <button type="submit"><i class="fa fa-search"></i></button>
    <div class="search-results" id="search-results">
      <div class="pet_res">
        
      </div>
      <div class="prod_res">
        
      </div>

   </div>
    <a href="#about">Track Order</a>
    <a href="#contact">Contact</a>
    <div id="login_att">
    <a href="signin.php" >Sign In</a>
    <a href="signup.php" >Sign up</a>
  </div>
      <button type="submit" class="btn Cart" style="margin-right: 60px;"><i class="fa fa-shopping-cart " aria-hidden="true"> </i> My Cart<span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></button>
      <button onclick="logout()" class="btn" id="user_att" > Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>
    </section>

    <!-- Dropdown Navbar -->
    <section id="dropdown-navbar">
      <div class="row">
      <div class="col-lg-2">
        <div class="dropdown">
          <button class="dropbtn">shop by product <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
          <div class="dropdown-content">
            <a href="dogproducts.php">dog products</a>
            <a href="catproducts.php">cat products</a>
            <a href="fishproducts.php">fish products</a>
            <a href="birdproducts.php">bird products</a>
            <a href="smallproducts.php">small pet products</a>
          </div>
        </div>
      </div>
       <!-- <div class="col-lg-2">
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
      </div>-->
      <div class="col-lg-2">
        <div class="dropdown">
          <button class="dropbtn">shop by pet <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button>
          <div class="dropdown-content">
            <a href="shopbypet.php?key=dog">dogs</a>
            <a href="shopbypet.php?key=cat">cats</a>
            <a href="shopbypet.php?key=fish">fish</a>
            <a href="shopbypet.php?key=bird">birds</a>
            <a href="shopbypet.php?key=smallpet">small pet</a>
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
        <input type="hidden" name="key" value="<?php echo $_GET['key'];?>" id="product-key">
    <div class="row">
      <div class="col-lg-5">
        <img src="<?php echo $data['location'];?>" class="product-img" alt="">
        <input type="hidden" name="img" value="<?php echo $data['location'];?>" id="product-img">
      </div>
      <div class="col-lg-7">
        <h2 ><?php echo $data['pname'];?></h2>
        <input type="hidden" name="name" value="<?php echo $data['pname'];?>" id="product-name">
        <br>
        <div class="row">
          <div class="col-lg-6">
            <h1 ><?php echo $data['price'];?> <span style='font-family:Arial;'>&#8377;</span></h1>
        <input type="hidden" name="price" value="<?php echo $data['price'];?>" id="product-price">

          </div>
          <div class="col-lg-6">
            <h3><?php echo $data['status'];?></h3>
            <input type="hidden" name="status" value="<?php echo $data['status'];?>" id="product-status">
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-6">
            <h5>Qty</h5>
            <form>
              <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
              <input type="number" id="number" class="quantity" value="0" />
              <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
            </form>
          </div>
          <div class="col-lg-6">
            <button class="btn btn-lg btn-primary btn-block add_to_cart" type="submit"  id="<?php echo $_GET["key"]; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</button><br>
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
<script type="text/javascript" src="script/cart.js"></script>
</body>

<script type="text/javascript" src="script/index.js"></script>
<script type="text/javascript" defer src="script/init-firebase.js"></script>
<script type="text/javascript" defer src="script/signin.js"></script>
  <script type="text/javascript" defer src="script/search.js"></script>





</html>
