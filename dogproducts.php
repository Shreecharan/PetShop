<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Pet Shop</title>
  <!-- CSS Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
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

  <!-- JQuery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase-database.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>

  <script>
    $(document).ready(function() {
      var outputSpan = $('#spanOutput');
      var sliderElement = $('#slider');

      $('#slider').slider({
        range: true,
        min: 0,
        max: 1000,
        values: [0, 300],
        slide: function (event, ui) {
          outputSpan.html(ui.values[0] + ' - ' + ui.values[1] + ' Years');
        }
      });

      outputSpan.html(sliderElement.slider('values', 0) + ' - ' + sliderElement.slider('values', 1) + " Years");
    });
  </script>

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
        <h6 class="center-prop">FREE 2-4 DAY SHIPPING OVER RS.1000! <i class="fa fa-truck" style="color:#ffba00;" aria-hidden="true"></i></h6>
      </div>
    </div>

  </section>

  <hr>
  <br> 
    <div id="category" class="btn-group" style="margin-left: 380px;">
  
  <button type="button" class="btn btn-outline-dark btn-rounded waves-effect food common_selector active" value="dry food">Dry Food</button>
  <button type="button" class="btn btn-outline-dark btn-rounded waves-effect food common_selector" value="gravy food">Gravy Food</button>
  <button type="button" class="btn btn-outline-dark btn-rounded waves-effect food common_selector" value="puppy food">Puppy food</button>
  <button type="button" class="btn btn-outline-dark btn-rounded waves-effect food common_selector" value="veg food">Veg food</button>
  <button type="button" class="btn btn-outline-dark btn-rounded waves-effect food common_selector" value="human grade food">Human grade food</button>
  <button type="button" class="btn btn-outline-dark btn-rounded waves-effect food common_selector" value="biscuits">Biscuits</button>
  <button type="button" class="btn btn-outline-dark btn-rounded waves-effect food common_selector" value="treats">Treats</button>

  </div>  

  <section id="products-page">
    <div class="row">
      <div class="col-md-2">
        <button type="button" class="btn btn-block btn-outline-dark" data-toggle="collapse" data-target="#pet">SELECT YOUR PET <i class="fas fa-plus"></i></button>
        <div id="pet" class="collapse">
          <div class="radio border-secondary">
            <label><input type="checkbox" class="common_selector petselect " id="dog" name="optradio" value="dog" checked="checked" disabled>Dog</label>
          </div>
        </div>
        <button type="button" class="btn btn-block btn-outline-dark" data-toggle="collapse" data-target="#age">AGE <i class="fas fa-plus"></i></button>
        <div id="age" class="collapse">
          <div class="radio">

            <label><input type="checkbox" class="common_selector ageselect " name="optradio" value="puppy">Puppy</label>
          </div>
          <div class="radio">
            <label><input type="checkbox" class="common_selector ageselect " name="optradio" value="adult">Adult</label>
         </div>
       </div>
       <?php 
            include('./firebase/index.php'); 
        ?>
       <button type="button" class="btn btn-block btn-outline-dark" data-toggle="collapse" data-target="#price">PRICE <i class="fas fa-plus"></i></button>
        <div id="price" class="collapse">
        <input type="hidden" id="hidden_minimum_price" value="0" />
                   <input type="hidden" id="hidden_maximum_price" value="65000" />
        <h5>Price : </h5>
        <p id="price_show">100 - 10000</p>
        <div id="price_range"></div>
        <br>
        </div>

        <button type="button" class="btn btn-block btn-outline-dark" data-toggle="collapse" data-target="#brand">BRAND <i class="fas fa-plus"></i></button>
        <div id="brand" class="collapse">
          <?php
             $path="brands/dog";
             $brand=$database->getReference($path)->getValue();
             foreach ($brand as $key => $value) {
              
         ?>
          <div class="radio">
            <label><input type="checkbox" class="common_selector brand" name="optradio" value="<?php echo $value['name'];?>"><?php echo $value['name'];?></label>
          </div>
          <?php
           }
           ?>
          </div>
      </div>
      <div class="col-md-10 ">
      <div class="row card-columns filter_data ">
     
    </div>
   </div>  
 </div>

  </section>
<style>

#loading
{
 text-align:center; 
  
 height: 150px;
}
</style>

  <script type="text/javascript" defer src="./script/init-firebase.js"></script>
  <script type="text/javascript" defer src="./script/signin.js"></script>
    <script type="text/javascript" defer src="script/search.js"></script>
  <script type="text/javascript" defer>
/*var btnContainer = document.getElementById("category");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    // Add the active class to the current/clicked button
    this.className += " active";
  });
}
*/

$(document).ready(function(){
   
    filter_data();
    var food; 
    /*$(".food").click(function() {
        food = $(this).val();
        
        });*/
    $(".btn-group > .btn").click(function(){
    $(".btn-group > .btn").removeClass("active");
    $(this).addClass("active");
});
    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var pet = get_filter('petselect');
        var age = get_filter('ageselect');
        food = $(".active").val();
       
        //var food;//= get_filter('food');
        

        $.ajax({
            url:"fetch_productdata.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, pet:pet, age:age, food:food },
            success:function(data){
                $('.filter_data').html(data);
            }
       });
   }

     function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
        
        
    });
    $('#price_range').slider({
        range:true,
        min:100,
        max:10000,
        values:[100, 10000],
        step:500,
        slide:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
 });            

  </script>
</body>

</html>
