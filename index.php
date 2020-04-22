<!DOCTYPE html>             
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Pet Shop</title>
  <!-- CSS Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  
  <!-- ajax jquery script-->
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
  
  <script defer src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  
  <!-- BootStrap Script -->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Font Icons -->
  <script src="https://kit.fontawesome.com/faa27f073b.js"></script>
  <script defer src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>
  <script defer src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>
  <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase-database.js"></script>
  <script defer src="https://www.gstatic.com/firebasejs/7.13.1/firebase-auth.js"></script>

  <script type="text/javascript" defer src="script/init-firebase.js"></script>
  <script type="text/javascript" defer src="script/signin.js"></script>
  <script type="text/javascript" defer src="script/search.js"></script>

</head>

<body>

   <!-- Top Navbar -->
  <section class="topnav">
    <a class="act" href="index.php"><b><i>PetsPlanet</i></b></a>
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
   
   <button type="submit" class="btn Cart" style="margin-right: 60px;"><i class="fa fa-shopping-cart" aria-hidden="true" ></i>My Cart</button>
  <!--<form  action="logout.php" method="post"> </form>-->
    <button onclick="logout()" class="btn" id="user_att" >Logout<i class="fa fa-sign-out" aria-hidden="true"></i></button>
     
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
            <div class="col-lg-2">

      </div>
      <div class="col-lg-4">
        <h6 class="center-prop">FREE 2-4 DAY SHIPPING OVER RS.1000!  <i class="fa fa-truck" style="color:#ffba00;" aria-hidden="true"></i></h6>
      </div>
    </div>

  </section>

  <section id="title">
    <div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <section class="hero">
              <div class="hero-inner">
                <a href="https://example.com/" class="btn">Go ahead...</a>
              </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="hero1">
              <div class="hero-inner">
                <a href="https://example.com/" class="btn">Go ahead...</a>
              </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="hero">
              <div class="hero-inner">
                <a href="https://example.com/" class="btn">Go ahead...</a>
              </div>
            </section>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <br><br>
   <section id="top-offers">

<div class="card-deck ">
<div class="card">
    <div class="view overlay">
      <img class="card-img-top" src="images/dog/husky1.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body p-3">
      <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Best Dog Breeds</h5>
      <br>
      <p class="aqua-sky-text mb-0"><i>“Dogs are not our whole life, but they make our lives whole.”</i> –<b> Roger Caras</b></p>
      <br>
      <a href="shopbypet.php?key=dog" type="button" class="blue-text d-flex flex-row-reverse p-2">
        <h5 class="waves-effect waves-light">Shop Now<i class="fas fa-angle-double-right ml-2"></i></h5>
      </a>
    
    </div>
  </div>
  <div class="card">
    <div class="view overlay">
      <img class="card-img-top" src="images/cat/catshop.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body p-3">
      <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Best Cat Breeds</h5>
      <br>
      <p class="aqua-sky-text mb-0"><i>“No home is complete without the pitter patter of kitty feet.”</i></p>
      <br>
            <a href="shopbypet.php?key=cat" type="button" class="blue-text d-flex flex-row-reverse p-2">
        <h5 class="waves-effect waves-light">Shop Now<i class="fas fa-angle-double-right ml-2"></i></h5>
      </a>
    </div>
  </div>
  <div class="card">
    <div class="view overlay">
      <img class="card-img-top" src="images/birds/birds.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body p-3">
      <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Best Bird Breeds</h5>
      <br>
      <p class="aqua-sky-text mb-0"><i> “The bird is powered by its own life and by its motivation.”</i> –<b>Abdul Kalam</b></p>
      <br>
            <a href="shopbypet.php?key=bird" type="button" class="blue-text d-flex flex-row-reverse p-2">
        <h5 class="waves-effect waves-light">Shop Now<i class="fas fa-angle-double-right ml-2"></i></h5>
      </a>
    </div>
  </div>
  <div class="card">
    <div class="view overlay">
      <img class="card-img-top" src="images/fish/fishshop.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <div class="card-body p-3">
      <h5 class="card-title font-weight-bold fuchsia-rose-text mb-0">Best Fish Breeds</h5>
      <br>
      <p class="aqua-sky-text mb-0"><i>“Fish did not discover water!!.”</i> –<b>Marshall McLuhann</b></p>
      <br>
            <a href="shopbypet.php?key=fish" type="button" class="blue-text d-flex flex-row-reverse p-2">
        <h5 class="waves-effect waves-light">Shop Now<i class="fas fa-angle-double-right ml-2"></i></h5>
      </a>
    </div>
  </div>

</div>

  <div class="health-and-knowledge">
    <img src="https://www.petsworld.in/pub/media/wysiwyg/healthcare_1.jpg" alt="" class="img-for-health">
    <img src="https://www.petsworld.in/pub/media/wysiwyg/birds_1.jpg" alt="" class="img-for-health1">
  </div>



 
    <div class="row">
      <div class="col-lg-6">
        <h2>Top Deals: Get Offers On Best Brands</h2>
      </div>
      <div class="col-lg-6">
        <a type="button" class="btn btn-primary right-float see-more-offers" href="products.php">See More</a>
      </div>
    </div>
    <br>
    <div class="row">
       <?php include('./firebase/index.php');
       
      /* $userid=''; 
     if( isset( $_GET['id'])) {
        $userid = urldecode($_GET['id']); 
          } 
   
   if(!empty($userid)){ 
   

    echo '<script>
    
    document.getElementById("user_att").style.visibility = "visible";
    document.getElementById("login_att").style.visibility = "hidden";</script>';
   
    
      

     // $email_id = $userid->email;
     
      // echo '<script>document.getElementById("user_name").innerHTML =  email_id;</script>';
}
   else {
    // No user is signed in.

    echo '<script>
    document.getElementById("user_att").style.display = "none";
    document.getElementById("login_att").style.display = "visible";</script>';

  }*/

              $ref = "product_info";
                      $id=0;
                        $data=$database->getReference($ref)->getValue();
                        foreach ($data as $key => $value) {
                                $id=$id+1;
                                if($id>=5) exit();

                        ?>
                     
      <div class="col-lg-3">
        <div class="card" style="width: 16rem;">
          <a href="productDetails.php?key=<?php echo $key;?>" class="card-block stretched-link text-decoration-none">  
          <img class="card-img-top" src="<?php echo $value['location'];?>" alt="Card image cap">
          <div class="card-body ">
                 <p class="card-text"><?php echo $value['description'];?></p>
                 <p >Status: <?php echo $value['status'];?></p>
                 <h6>Price: <?php echo $value['price'];?> <span style='font-family:Arial;'>&#8377;</span></h6>
              </div>
          <div class="card-footer">
            <button type="button" class="btn btn-lg btn-block btn-primary">Add To Cart</button>
          </div>
            </a>
        </div>
      </div>
      
      <?php } 
        
    
      ?>
      
    </div>
  </section>

</body>


    
</html>
