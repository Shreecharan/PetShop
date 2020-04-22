<?php
    ob_start();
    include('./firebase/index.php');
    $path = "pet";
    $petdata = $database->getReference($path)->getValue(); 
    $data = array();
    foreach ($petdata as $key => $value) {
    foreach ($value["breed"] as $key1 => $value1) {
                $data= array_merge($data,  array($value1["name"]) );
           } 
        }
        
        if(isset($_POST["category"]))
        {
            $pet=$_POST["category"];
            $data1 = array( ); 
            
            //foreach ($data as $key => $value) {
          
                $path='pet/'.$pet.'/breed'; 
                $newdata = $database->getReference($path)->getValue();       
                foreach ($newdata as $key => $value) {
                     $data1= array_merge($data1, array( $value['name']));    
                  } 
            
                        
                    
               // }

                $data=$data1; 
              
            }
    for ($i=0, $len = count($data); $i<$len; $i++) { ?>
    	<option value="<?php echo $data[$i];?>"><?php echo $data[$i];?></option>
    

       <?php
        }  
        ?>

            
            