<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Pet Shop</title>
  <!-- CSS Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/signup.css">
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">


  <!--jquery script-->
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
        <h6 class="center-prop">FREE 2-4 DAY SHIPPING OVER RS.1000! <i class="fa fa-truck" style="color:#ffba00;" aria-hidden="true"></i></h6>
      </div>
    </div>
  </section>
  <hr>

  <section id="signin-body">
    <h2>Customer Login</h2>
    <br>
    <div class="row">
      <div class="col-lg-5">
        
        <!--<form action="signinauth.php" method="post" enctype="multipart/form-data"></form>-->

        <h3><u>Registered Customers</u></h3>
        <br>
        <p>If you have an account, sign in with your email address.</p><br>
        <small>Email*</small>
        <input type="email"  class="form-control" placeholder="Email address" name="email" id="email" required autofocus><br>
        <small>Password*</small>
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required><br>
        
         <button onclick="login()" class="btn btn-lg btn-primary btn-block">Login </button>
       <!-- <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Sign In </button>-->
             </div>

      <div class="col-lg-2">

      </div>

      <div class="col-lg-5">
        <h3><u>New Customers</u></h3>
        <br>
        <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
        <a class="btn btn-lg btn-primary btn-block" type="button" href="signup.php" >Sign up</a>
      </div>
    </div>
  </section>


<script  defer src="script/init-firebase.js"></script>
<script defer src="script/signin.js"></script>
  <script type="text/javascript" defer src="script/search.js"></script>

</body>

</html>
