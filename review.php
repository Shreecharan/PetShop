<?php 
    include('./firebase/index.php');
     
     if(isset($_POST['save'])){
          
            $name = $_POST['user'];
            $summary =  $_POST['summary'];
            $review = $_POST['review'];
            $key=$_POST['key'];
            if(empty($name) || empty($summary) || empty($review) ){
                    echo '<script>alert("Fields must be empty.");
                                 window.location.href="productDetails.php";
                    </script>';
                
                }else {
                    $data=[
                        'user' =>$name,
                        'summary' => $summary,
                        'review' => $review,
                          ];
      $ref = $_POST['tablename'].$_POST['key']."/Review";
                    $pushdata = $database->getReference($ref)->push($data);
                    
                    if($pushdata){
                        ?>
                                    <script type="text/javascript"> window.location.href="<?php echo $_POST['tablename']?>?key=<?php echo $key;?>";</script>
                                  <?php }else {
                                        echo '<script>alert("Sory unable to process your request!");</script>';?>
                                    <script type="text/javascript"> window.location.href="productDetails.php?key=<?php echo $key;?>";</script>;
                                  <?php      }
                    
                    }
        }
        ?>