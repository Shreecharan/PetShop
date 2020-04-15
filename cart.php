<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pet Shop</title>
    <!-- CSS Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cart.css">

    <!-- BootStrap Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Font Icons -->
    <script src="https://kit.fontawesome.com/faa27f073b.js"></script>

    <script src="script/index.js"></script>
  </head>
  <body>

    <!-- Top Navbar -->
   <section class="topnav">

     <a class="active" href="index.php"><b><i>PetsPlanet</i></b></a>
     <input type="text" placeholder="Search.." name="search" autocomplete="off" id="search">
     <button type="submit"><i class="fa fa-search"></i></button>
     <div id="search-results">
       <h4>show div tag</h4>
       <h4>dfgd gd g sg</h4>
     </div>
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

    <hr>

    <section id="cart-details">
      <div class="row">
        <div class="col-lg-7 cart-section">
          <div class="row">
            <div class="col-md-6">
              <h4>My Cart(1)</h4>
            </div>
            <div class="col-md-6 make-inline">
              <i class="fas fa-map-marked-alt  make-inline"></i>
              <p class="make-inline"><b>Deliver to</b></p>
              <select class="form-control make-inline" name="address">
                <option selected>Choose...</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Chennai">Chennai</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Hydrabad">Hydrabad</option>
              </select>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-3">
              <div class="row">
                <div class="col-md-12">
                  <img src="images/husky1.jpg" class="img-pad" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <form>
                    <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                    <input type="number" id="number" value="0" />
                    <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <h6>Colgate Active Salt Toothpaste</h6>
              <small>600 g, Pack of 2</small>
              <br>
              <small>Seller: SuperComNet</small>
              <br><br>
              <h5>₹263</h5>
              <br>
              <button type="button" name="remove">REMOVE</button>
            </div>
            <div class="col-lg-4">
              <small>Delivery by Tomorrow, Wed | Free</small>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn btn-lg btn-primary" name="button">PLACE ORDER</button>
            </div>
          </div>
        </div>
        <div class="col-lg-1">

        </div>
        <div class="col-lg-4 cart-section">
          <h3>PRICE DETAILS</h3>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <h6>Price (1 item)</h6>
            </div>
            <div class="col-md-6">
              <h6 class="fleft">₹263</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h6>Delivery Fee</h6>
            </div>
            <div class="col-md-6">
              <h6 class="fleft">FREE</h6>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <h5>Total Amount</h5>
            </div>
            <div class="col-md-6">
              <h5 class="fleft">₹263</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>
