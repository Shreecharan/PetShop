<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="css/adminProductDetails.css">

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
    <!--firebase iniit-->
   <script defer src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>
  <script defer src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>
  <script defer src="https://www.gstatic.com/firebasejs/7.13.2/firebase-database.js"></script>
  <script defer src="https://www.gstatic.com/firebasejs/7.13.1/firebase-auth.js"></script>

</head>

<body>
  <!-- Top Navbar -->
  <section class="topnav">
    <a class="active" href="#home"><b><i>PetsPlanet</i></b></a>
    <div class="floating-part-topnav">
      <a href="addpet.php">Add Pet</a>
      <a href="addproduct.php">Add Product</a>
      <a href="adminProductDetails.php">Update Product</a>
      <a href="#contact"><i class="fas fa-user"></i> Admin Account</a>
      <button type="submit" class="btn"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
    </div>
  </section>
  <br>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <section id="add-product">
    <h2 class="center"><i class="fas fa-cogs"></i> Add Product</h2>
    <br>
    <section>
      <div class="row">

        <div class="col-lg-5">
          <p style="color:red"><i>Note: Fields with (*) are required</i></p>
        </div>
        <div class="col-lg-7 product-details">
          <label>Product Name*: </label>
          <input type="text" class="form-control" name="product-name" required autofocus><br>
          <label>Amount*: </label>
          <input type="text" class="form-control" name="product-price" required autofocus><br>
          <label>Decription*: </label><br>
          <textarea name="product-description" rows="3" cols="75"></textarea><br>
          <br>
          <label>Image*: </label>
          <input type="file" name="image" value=""><br><br>

          <label>Status*:</label>
          <div class="dropdown">
            <select class="dropdown-toggle btn btn-secondary" name="product-status">
              <option value="available">Available</option>
              <option value="unavailable">Unavailable</option>
            </select>
          </div>
         <br><br>
         
          <label>Category*:</label>
          <div class="dropdown">
            <select class="dropdown-toggle btn btn-secondary category" name="product-category">
              <option value="dog">Dog</option>
              <option value="fish">Fish</option>
              <option value="bird">Bird</option>
              <option value="cat">Cat</option>
            </select>
          </div>
          <br><br>
          <label>Age*:</label>
          <div class="dropdown">
            <select class="dropdown-toggle btn btn-secondary age" name="product-age">
              <!--<option value="available">Available</option>
              <option value="unavailable">Unavailable</option>-->
            </select>
          </div>
         <br><br>

           <label>Brand*:</label>
          <div class="dropdown">
            <select class="dropdown-toggle btn btn-secondary brand" name="product-brand">
              <!--<option value="royal canin">Royal Canin</option>
              <option value="farmina">Farmina</option>
              <option value="orijen">Orijen</option>
              <option value="sunseed">Sunseed</option>
              <option value="taste of the wild">Taste Of The Wild</option>
              <option value="hills sceince diet">Hills Science Diet</option>
              <option value="acana">Acana</option>-->
            </select>
          </div>
          <br><br>


                    <label>Food Category*:</label>
          <div class="dropdown">
            <select class="dropdown-toggle btn btn-secondary food" name="food-cat">
             <!-- <option value="dry">Dry food</option>
              <option value="gravy">Gravy food</option>
              <option value="puppy">Puppy food</option>
              <option value="veg">Veg food</option>
              <option value="human grade food">Human grade food</option>
              <option value="biscuits">Biscuits</option>
              <option value="treats">Treats</option>-->
            </select>
          </div>
          <br><br>

          <div class="row">
            <div class="col-lg-2">
              <button type="clear" class="btn btn-secondary" name="button">Clear</button>
            </div>
            <div class="col-lg-2">
              <button type="submit" class="btn btn-success" name="save">Save</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</form>
<?php 
include('./firebase/index.php');
if(isset($_POST['save'])){
            $name = $_POST['product-name'];
            $prize = $_POST['product-price'];
            $des = $_POST['product-description'];
            $stat = $_POST['product-status'];
            $category = $_POST['product-category'];
            $brand =  $_POST['product-brand'];
            $foodcat = $_POST['food-cat'];
            $age = $_POST['product-age'];
             //image
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);
//
            move_uploaded_file($_FILES["image"]["tmp_name"], "./images/" . $_FILES["image"]["name"]);
            $location = "./images/" . $_FILES["image"]["name"];
            if(empty($name) || empty($prize) || empty($des) || empty($stat) || empty($category) || empty($brand) || empty($foodcat) || empty($age)){
                    echo '<script>alert("Fields must be empty.");
                                 window.location.href="addcnp.php";
                    </script>';
                
                }else {
                    $data1=[
                        'pname' =>$name,
                        'price' => $prize,
                        'description' => $des,
                        'status' => $stat,
                        'location' => $location,
                        'category' => [
                        'pet' => $category,
                        'food' => $foodcat,
                        'brand' => $brand,
                         'age ' => $age
                    ]
                        
                    ];
                  /*  $data2=[
                        'pet' => $category,
                        'food' => $foodcat,
                        'brand' => $brand,
                         'age ' => $age
                    ];*/
                    $ref1 = "product_info/";
                    $pushdata1 = $database->getReference($ref1)->push($data1);
                    //$ref2 = "product_info/category";
                    //$pushdata2 = $database->getReference($ref2)->push($data2);
                    if($pushdata1 ){
                        echo '<script>alert("Saved Successfully!");
                                    window.location.href="addproduct.php";</script>';}else {
                                        echo '<script>alert("Sory unable to process your request!");
                                    window.location.href="addproduct.php";</script>';
                                        }
                    
                    }
        }
?>
<script type="text/javascript">
$(document).ready(function(){

  load_product();

function load_product()
 {
  
  var category = $('.category').val();
  $.ajax({
   url:"fetchprodinfo.php",
   method:"POST",
   dataType:"json",
   data:{category:category},
   success:function(data)
   {
    $('.age').html(data.age);
    $('.brand').html(data.brand);
    $('.food').html(data.food);
    console.log(data);
   }
  });
 }
$('.category').click(function(){
        load_product();
    });

    
});
</script>
  <script type="text/javascript" defer src="script/init-firebase.js"></script>


</body>

</html>
