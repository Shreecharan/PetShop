<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Pet Shop</title>
  <!-- CSS Fonts -->
  <script type="text/javascript" nonce="0b0845a34e5744b4896fa2207eb" src="//local.adguard.org?ts=1584458659052&amp;type=content-script&amp;dmn=mail-attachment.googleusercontent.com&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1"></script>
<script type="text/javascript" nonce="0b0845a34e5744b4896fa2207eb" src="//local.adguard.org?ts=1584458659052&amp;name=AdGuard%20Assistant%20Beta&amp;name=AdGuard%20Popup%20Blocker%20%28Beta%29&amp;name=AdGuard%20Extra%20Beta&amp;type=user-script"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/signup.css">

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
    <a class="active" href="#home"><b><i>PetsPlanet</i></b></a>
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
    <a href="#about">Track Order</a>
    <a href="#contact">Contact</a>
    <a href="#contact">Sign In</a>
    <a href="#contact">Sign up</a>
    <button type="submit" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>My Cart</button>
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

    <section id="signup-body">
      <h2>Create New Customer Account</h2>
      <br>
      <div class="row">
        <div class="col-lg-5">
          <h3><u>Social Account SignIn</u></h3>
          <br>
          <button class="loginBtn loginBtn--facebook">
            Login with Facebook
          </button>
          <br><br>
          <button class="loginBtn loginBtn--google">
            Login with Google
          </button>
        </div>
        <div class="col-lg-2">
          <p class="para-float">(or)</p>
        </div>
        <div class="col-lg-5">
          <form action="signupauth.php" method="post" enctype="multipart/form-data">
          <h3><u>Personal Information</u></h3>
          <br>
          <small>First Name*</small><br>
          <input type="text" class="form-control" placeholder="First Name" required autofocus name="FirstName"><br>
          <small>Last Name*</small>
          <input type="text" class="form-control" placeholder="Last Name" required autofocus name="LastName"><br>
          <h3><u>Sign-in Information</u></h3><br>
          <small>Email*</small>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="Email"><br>
          <small>Password*</small>
          <input type="password" class="form-control" placeholder="Password" id="pwd" required name="Password">
          <div id="showErrorPwd"> <br>
          <small>Confirm Password*</small>
          <input type="password" class="form-control" placeholder="Confirm Password" id="cpwd" required name="CPassword">
          <div id="showErrorcPwd"> </div><br>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button><br>
          </form>
        </div>
      </div>
    </section>

    <script>
      $(document).ready(function(){

        $('#pwd, #cpwd').on('keyup', function() {

          if($('#pwd').val() != $('#cpwd').val()) {
            $('#showErrorcPwd').html('**Password does not match').css("color", "red");
            return false;
          } else {
            $('#showErrorcPwd').html(' ');
            return true;
          }

        });

      });
    </script>

</body>

</html>
