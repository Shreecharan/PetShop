<?php
    ob_start();
    include('./firebase/index.php');
    $path = "pet_info";
    $slidebar='';
    $petres='';

            $petdata = $database->getReference($path)->getValue(); 
            
           
            if(isset($_POST["action"]))
             {
            //$data1 ='$value["status"] == "1" ';
             	$data = array();
             	foreach ($petdata as $key => $value) {
             		$data= array_merge($data, array($key => $value ));
             	}

            if(isset($_POST["pet"]))
            	{
            		$pet=$_POST["pet"];
            		//$data1.='&& $value["category"] == $petdata' ;
                    $data1 = array( ); 
            		foreach ($data as $key => $value) {
            			for ($i=0, $len=count($pet); $i<$len; $i++) {
            				
            			if($value['category'] == $pet[$i]){
            				
            			   $data1= array_merge($data1, array($key => $value));	
                        
            	        }
                   	}
           	    }

                $data=$data1;	
            	
            }	
            
            if(isset($_POST["breed"]))
             {
            
              //$data1 .= ' && $value["breed"] == $_POST["breed"] ';
             	$breed=$_POST["breed"];
            		//$data1.='&& $value["category"] == $petdata' ;
                    $data1 = array( ); 
            		
            			for ($i=0, $len=count($breed); $i<$len; $i++) {
            			foreach ($data as $key => $value) {	
            				
            			if($value["breed"] == $breed[$i]){
            				
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
                               		
             print_r($data);
            foreach ($data as $key => $value) {
                	//echo $petdata;
                	 // $d= eval("return $data1;");            	   
              	    //array_filter($petdata, function (array $userData) {
              	    	//print_r($petdata["key"]);
              	    //});


              	     
                	    //if ($d)  {
              	    	//echo $d;
              	    
              	    	
        $petres.='      	
        <div class="col-lg-4 ">
                <div class="card-deck" style="width: 20rem; ">
                <a href="petDetails.php?key='.$key.'" class="card-block stretched-link text-decoration-none">
                <img class="card-img-top" src="'.$value["location"].'" alt="Card image cap" style="min-width: 20px;">
                <div class="card-body ">
                    <p class="card-text">'.$value["pname"].'</p>
                    <p >Status: '. $value["status"].'</p>
                        <h6>Price: '.$value["price"].' <span style="font-family:Arial;">&#8377;</span></h6>
                </div>
                <div class="card-footer">
                <button type="button" class="btn btn-lg btn-block btn-primary">Add To Cart</button>
                </div>
                </a>
                </div>
                </div>';
                      
              	    //}
                    
                	 
                   }
       $path="pet";      
       $petdata = $database->getReference($path)->getValue(); 
      $data = array();
        foreach ($petdata as $key => $value) {
           foreach ($value["breed"] as $key1 => $value1) {
                $data= array_merge($data,  array($value1["name"]) );
           } 
        }
        
        if(isset($_POST["pet"]))
        {
            $pet=$_POST["pet"];
            $data1 = array( ); 
            
            //foreach ($data as $key => $value) {
            for ($i=0, $len=count($pet); $i<$len; $i++) {  
                $path='pet/'.$pet[$i].'/breed'; 
                $newdata = $database->getReference($path)->getValue();       
                foreach ($newdata as $key => $value) {
                     $data1= array_merge($data1, array( $value['name']));    
                  } 
            
                        
                    }
               // }

                $data=$data1; 
              
            }
            
            for ($i=0, $len = count($data); $i<$len; $i++) {
               
          $slidebar.='  <div class="radio">
            <label id="rad"><input type="checkbox" class="common_selector breed onbreedclick" id="breedsel" name="optradio" value="'. $data[$i].'">'.$data[$i].'</label>
          </div>';
        
        }  
       ob_end_clean();
      $output = array(  
        'petres'     =>     $petres,  
        'slidebar'       =>    $slidebar 
      );  
      echo json_encode($output);                        
    
                 
   }
            
            ?>