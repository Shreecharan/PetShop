<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Pet Shop</title>
  <!-- CSS Fonts -->
  <script type="text/javascript" nonce="c4c419ca55bb4bb8ab219e683ae" src="//local.adguard.org?ts=1584423915382&amp;type=content-script&amp;dmn=mail-attachment.googleusercontent.com&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1"></script>
<script type="text/javascript" nonce="c4c419ca55bb4bb8ab219e683ae" src="//local.adguard.org?ts=1584423915382&amp;name=AdGuard%20Assistant%20Beta&amp;name=AdGuard%20Popup%20Blocker%20%28Beta%29&amp;name=AdGuard%20Extra%20Beta&amp;type=user-script"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/signup.css">

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
    <button type="submit" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>My Cart</button>
    <form  action="logout.php" method="post">
    <button type="submit" class="btn" id="user_att" name="logout" ><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button>
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
</body>

</html>
