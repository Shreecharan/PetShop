<?php
    include('./firebase/index.php');
    $path = "product_info";
            $proddata = $database->getReference($path)->getValue(); 
            
           
            if(isset($_POST["action"]))
             {
            //$data1 ='$value["status"] == "1" ';
             	$data = array();
             	foreach ($proddata as $key => $value) {
             		$data= array_merge($data, array($key => $value ));
             	}

            if(isset($_POST["pet"]))
            	{
            		$pet=$_POST["pet"];
            		$data1 = array( ); 
            		foreach ($data as $key => $value) {
            			for ($i=0, $len=count($pet); $i<$len; $i++) {
                    $petdb=$value["category"];
            				
            			if($petdb['pet'] == $pet[$i]){
            				
            			   $data1= array_merge($data1, array($key => $value));	
                        
            	        }
                   	}
           	    }

                $data=$data1;	
            	
            }	
            
            if(isset($_POST["brand"]))
             {
            
              //$data1 .= ' && $value["breed"] == $_POST["breed"] ';
             	$brand=$_POST["brand"];
            		//$data1.='&& $value["category"] == $petdata' ;
                    $data1 = array( ); 
            		
            			for ($i=0, $len=count($brand); $i<$len; $i++) {
            			foreach ($data as $key => $value) {	
            				$breeddb=$value["category"];
            			if($breeddb["brand"] == $brand[$i]){
            				
            			   $data1= array_merge($data1, array($key => $value));	
                        
            	        }
                   	}
           	    }

                $data=$data1;	
            	
            }	
            
            if(isset($_POST["food"]))
             {
            
              //$data1 .= ' && $value["breed"] == $_POST["breed"] ';
              $food=$_POST["food"];
                //$data1.='&& $value["category"] == $petdata' ;
                    $data1 = array( ); 
                
                 // for ($i=0, $len=count($food); $i<$len; $i++) {
                  foreach ($data as $key => $value) { 
                    $fooddb = $value["category"];
                  if($fooddb["food"] == $food){
                    
                     $data1= array_merge($data1, array($key => $value));  
                        
                      //}
                    }
                }

                $data=$data1; 
              
            }
           if(isset($_POST["age"]))
             {
              $age=$_POST["age"];
                    $data1 = array( ); 
                
                  for ($i=0, $len=count($age); $i<$len; $i++) {
                  foreach ($data as $key => $value) { 
                    $agedb = $value["category"];
                  if($agedb["age"] == $age[$i]){
                    
                     $data1= array_merge($data1, array($key => $value));  
                        
                      }
                    }
                }
                $data=$data1; 
            } 
            if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
              {
              	//$data1 .= ' && $value["price"] <= $_POST["maximum_price"] && $value["price"] >= $_POST["minimum_price"]';
              	$minimum_price=$_POST["minimum_price"];
              	$maximum_price=$_POST["maximum_price"];
            		//$data1.='&& $value["category"] == $petdata' ;
                    $data1 = array( ); 
            		foreach ($data as $key => $value) {
            			            				
            			if($value['price'] >= $minimum_price && $value['price'] <= $maximum_price){
            				
            			   $data1= array_merge($data1, array($key => $value));	
                        
            	        }
                   	}
           	    

                $data=$data1;	
            	  
               }
                       		
            foreach ($data as $key => $value) {
                           
              	    	?>

         <div class="col-lg-4 ">
            <div class="card "  >

                <a href="productDetails.php?key=<?php echo $key;?>" class="card-block stretched-link text-decoration-none">
                <img class="card-img-top" src="<?php echo $value["location"];?>" alt="Card image cap" style="min-width: 20px;">
                <div class="card-body ">
                    <p class="card-text"><?php echo $value["pname"];?></p>
                    <p >Status: <?php echo $value["status"];?></p>
                        <h6>Price: <?php echo $value["price"];?> <span style="font-family:Arial;">&#8377;</span></h6>
                </div>
                <div class="card-footer">
                <button type="button" class="btn btn-lg btn-block btn-primary">Add To Cart</button>
                </div>
                </a>
            </div>
        </div>

                
               
                <?php        
              	    //}
                    
                	 
                   }
                
                 
                }
            
            ?>