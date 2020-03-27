<?php 
include('./firebase/index.php');
if(isset($_POST['save'])){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $des = $_POST['description'];
            $stat = $_POST['status'];
            $ref = $_POST['ref'];
             //image
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);
//
            move_uploaded_file($_FILES["image"]["tmp_name"], "./images/" . $_FILES["image"]["name"]);
            $location = "./images/" . $_FILES["image"]["name"];
            if(empty($name) || empty($price) || empty($des) || empty($stat)){
                    echo '<script>alert("Fields must be empty.");
                                
                    </script>';
                
                }else {
                    $data=[
                        'pname' =>$name,
                        'price' => $price,
                        'description' => $des,
                        'status' => $stat,
                        'location' => $location
                    ];
                    
                    $updatedata = $database->getReference($ref)->update($data);
                    
                    if($updatedata){
                        echo '<script>alert("Saved Successfully!");
                                    window.location.href="adminProductDetails.php";</script>';}else {
                                        echo '<script>alert("Sory unable to process your request!");
                                    window.location.href="adminProductDetails.php";</script>';
                                        }
                    
                    }
        }
        elseif (isset( $_GET['key'])) {
        		$deletedata=$database->getReference("pet_info/".$_GET['key'])->remove();
        		if($deletedata){
                        echo '<script>alert("Deleted Successfully!");
                                    window.location.href="adminProductDetails.php";</script>';}else {
                                        echo '<script>alert("Sory unable to process your request!");
                                    window.location.href="adminProductDetails.php";</script>';
                                        }
                    
                    }
        
?>