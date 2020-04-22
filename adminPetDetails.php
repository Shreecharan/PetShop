<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <script type="text/javascript" nonce="0b0845a34e5744b4896fa2207eb" src="//local.adguard.org?ts=1584458659052&amp;type=content-script&amp;dmn=mail-attachment.googleusercontent.com&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1"></script>
<script type="text/javascript" nonce="0b0845a34e5744b4896fa2207eb" src="//local.adguard.org?ts=1584458659052&amp;name=AdGuard%20Assistant%20Beta&amp;name=AdGuard%20Popup%20Blocker%20%28Beta%29&amp;name=AdGuard%20Extra%20Beta&amp;type=user-script"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/adminProductDetails.css">

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
   <div class="floating-part-topnav">
     <a href="addpet.php">Add Pet</a>
     <a href="addProduct.php">Add Product</a>
     <a href="adminProductDetails.php">Update Product</a>
      <a href="adminPetDetails.php">Update Pet</a>
     <a href="#contact"><i class="fas fa-user"></i> Admin Account</a>
     <button type="submit" class="btn "><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
   </div>
 </section>
  <br>
  <h2 class="center">Pet List</h2>
  <br>
  <section id="product-list">
    <div class="row product-table-head">
      <div class="col-lg-2">
        <h5>Name</h5>
      </div>
      <div class="col-lg-4">
        <h5>Description</h5>
      </div>
      <div class="col-lg-1">
        <h5>Price</h5>
      </div>
      <div class="col-lg-1">
        <h5>Status</h5>
      </div>
      <div class="col-lg-2">
        <h5>Image</h5>
      </div>
      <div class="col-lg-2">
        <h5>Action</h5>
      </div>
    </div>
    <br>

    <?php include('./firebase/index.php');
              $ref = "pet_info";
                      $id=0;
                        $data=$database->getReference($ref)->getValue();
                        foreach ($data as $key => $value) {
                                
                                

                        ?>


    <div class="row">
      <div class="col-lg-2 btn-padding">
        <h6><?php echo $value['pname'];?></h6>
      </div>
      <div class="col-lg-4">
        <p><?php echo $value['description'];?></p>
      </div>
      <div class="col-lg-1 btn-padding">
        <h5><?php echo $value['price'];?></h5>
      </div>
      <div class="col-lg-1 btn-padding">
        <h5><?php echo $value['status'];?></h5>
      </div>
      <div class="col-lg-2">
        <img src="<?php echo $value['location'];?>" class="admin-product-image"/>
      </div>
      <div class="col-lg-2 btn-padding">
        <div class="row">
          <div class="col-lg-6">
          <a href="#updateModal<?php echo $id;?>" data-toggle="modal" data-target="#updateModal<?php echo $id;?>" class="btn btn-primary">Update</a>           
           <div class="modal fade" id="updateModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> </h4>
            </div>
             <form class="form-horizontal" enctype="multipart/form-data" method="post" action="updateinfo.php">
 
              <div class="modal-body">
              <div class="row">
              <div class="col-lg-2">
              <label class="pull-right">Name*</label>
              </div>
              <div class="col-lg-10">
              
              <input type="text" class="form-control"  name="name"  value="<?php echo $value['pname'];?>" required>

            </div></div><br>
            <div class="row">
            <div class="col-lg-2">
            <label class="pull-right">Description*</label>
            </div>
            <div class="col-lg-10">
   
             <textarea name="description" class="form-control"  value="<?php echo $value['description']; ?>" required><?php echo $value['description']; ?></textarea>
            </div></div><br>
            <div class="row">
        <div class="col-lg-2">
        <label class="pull-right">Amount*</label></div>
        <div class="col-lg-10">
   
            <input type="number" class="form-control" name="price" placeholder="<?php echo $value['price'];?>" value="<?php echo $value['price'];?>" required>
          </div></div><br>
        <div class="row">
        <div class="col-lg-2">
        <label class="pull-right">Status*</label>
        </div><div class="col-lg-10">
          <select name="status" class="form-control" required>
          <option value="<?php echo $value['status'];?>"><?php echo $value['status'];?></option>
          <option>Select</option>
          <option value="Available">available</option>
          <option value="Un-Available">unavailable</option>
          </select>
         </div></div><br>
        <div class="row">
      <div class="col-lg-2">
        <label class="pull-right">Image</label>
      </div>
        <div class="col-lg-10">
        <img src="<?php echo $value['location'];?>" width="120px;" class="img-responsive img-rounded" style="margin-bottom:5px;">
          <input type="file" class="form-control" id="image" name="image"required>
        </div></div>
          </div>
        <div class="modal-footer">
         <input type="hidden" name="ref" value="pet_info/<?php echo $key ?>"> 
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info" name="save">Save changes</button>
      </div> 
      </form>
    </div>
  </div>
</div>  
        


          </div>
          <div class="col-lg-6">
            <a href="updateinfo.php?key=<?php echo $key;?>" type="button" class="btn btn-danger"> Delete</a>
          </div>
        </div>
      </div>
    </div>
      <?php 
          }
        ?>
    <hr>
  </section>
</body>

</html>
