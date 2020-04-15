<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Pet Shop</title>
  <!-- CSS Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">

  <!-- BootStrap Script -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Font Icons -->
  <script src="https://kit.fontawesome.com/faa27f073b.js"></script>

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
  <button type="submit" class="btn" style="margin-right: 60px;"><i class="fa fa-shopping-cart" aria-hidden="true" ></i>My Cart</button>
  <form  action="logout.php" method="post">
   <button type="submit" class="btn" id="user_att" name="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button>
   </form>
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

  <section id="top-offers">
    <div class="row">
      <div class="col-lg-6">
        <h2>Top Deals: Get Offers On Best Brands</h2>
      </div>
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary right-float see-more-offers">See More</button>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <img class="card-img-top" src="https://www.petsworld.in/pub/media/catalog/product/cache/2765542505660baab28ecd555e27366e/u/l/ultra-light-1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Royal Canin Ultra Light Cat Food 1.2 Kg (12 Pcs) With Free Gifts</p>
            <h6><center>$200</center></h6>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-lg btn-block btn-primary">Add To Cart</button>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img class="card-img-top" src="https://www.petsworld.in/pub/media/catalog/product/cache/2765542505660baab28ecd555e27366e/u/l/ultra-light-1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Royal Canin Ultra Light Cat Food 1.2 Kg (12 Pcs) With Free Gifts</p>
            <h6><center>$200</center></h6>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-lg btn-block btn-primary">Add To Cart</button>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img class="card-img-top" src="https://www.petsworld.in/pub/media/catalog/product/cache/2765542505660baab28ecd555e27366e/u/l/ultra-light-1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Royal Canin Ultra Light Cat Food 1.2 Kg (12 Pcs) With Free Gifts</p>
            <h6><center>$200</center></h6>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-lg btn-block btn-primary">Add To Cart</button>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <img class="card-img-top" src="https://www.petsworld.in/pub/media/catalog/product/cache/2765542505660baab28ecd555e27366e/u/l/ultra-light-1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Royal Canin Ultra Light Cat Food 1.2 Kg (12 Pcs) With Free Gifts</p>
            <h6><center>$200</center></h6>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-lg btn-block btn-primary">Add To Cart</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="health-and-knowledge">
    <img src="https://www.petsworld.in/pub/media/wysiwyg/healthcare_1.jpg" alt="" class="img-for-health">
    <img src="https://www.petsworld.in/pub/media/wysiwyg/birds_1.jpg" alt="" class="img-for-health1">
  </div>

  <section id="footer">

  </section>

  <?php
    $userid= urldecode($_GET['id']);
   if(!empty($userid)){


    echo '<script>
    document.getElementById("user_att").style.display = "visible";
    document.getElementById("login_att").style.display = "none";</script>';




     // $email_id = $userid->email;

      // echo '<script>document.getElementById("user_name").innerHTML =  email_id;</script>';
}
   else {
    // No user is signed in.

    //echo '<script>
    //document.getElementById("user_att").style.display = "none";
    //document.getElementById("login_att").style.display = "visible";</script>';

  }

?>

</body>

</html>
