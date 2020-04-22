<?php
    ob_start();
    include('./firebase/index.php');
    $path = "pet";
    $food = "";
    $age ="";
    $brand = "";
    $petdata = $database->getReference($path)->getValue(); 
    $data = array();
    foreach ($petdata as $key => $value) {
    foreach ($value["food"] as $key1 => $value1) {
                $data= array_merge($data,  array($value1["name"]) );
           } 
        }
        
        if(isset($_POST["category"]))
        {
            $pet=$_POST["category"];
            $data1 = array( ); 
            
            //foreach ($data as $key => $value) {
          
                $path='pet/'.$pet.'/food'; 
                $newdata = $database->getReference($path)->getValue();       
                foreach ($newdata as $key => $value) {
                     $data1= array_merge($data1, array( $value['name']));    
                  } 
            
                        
                    
               // }

                $data=$data1; 
              
            }
    for ($i=0, $len = count($data); $i<$len; $i++) {
       $food.='<option value="'. $data[$i].'">'. $data[$i].'</option>';
    
       }  

$path = "pet";
$petdata = $database->getReference($path)->getValue(); 
$data = array();
foreach ($petdata as $key => $value) {
foreach ($value["food"] as $key1 => $value1) {
            $data= array_merge($data,  array($value1["name"]) );
           } 
        }
        
        if(isset($_POST["category"]))
        {
            $pet=$_POST["category"];
            $data1 = array( ); 
            
            //foreach ($data as $key => $value) {
          
                $path='pet/'.$pet.'/age'; 
                $newdata = $database->getReference($path)->getValue();       
                foreach ($newdata as $key => $value) {
                     $data1= array_merge($data1, array( $value['name']));    
                  } 
            
                        
                    
               // }

                $data=$data1; 
              
            }
    for ($i=0, $len = count($data); $i<$len; $i++) {
       $age.='<option value="'. $data[$i].'">'. $data[$i].'</option>';
    
       }  

$path = "brands";
$petdata = $database->getReference($path)->getValue(); 
$data = array();
foreach ($petdata as $key => $value) {

        $data= array_merge($data,  array($value1["name"]) );
     
 }
        
        if(isset($_POST["category"]))
        {
            $pet=$_POST["category"];
            $data1 = array( ); 
            
            //foreach ($data as $key => $value) {
          
                $path='brands/'.$pet; 
                $newdata = $database->getReference($path)->getValue();       
                foreach ($newdata as $key => $value) {
                     $data1= array_merge($data1, array( $value['name']));    
                  } 
            
                        
                    
               // }

                $data=$data1; 
              
            }
    for ($i=0, $len = count($data); $i<$len; $i++) {
       $brand.='<option value="'. $data[$i].'">'. $data[$i].'</option>';
    
       }  
     ob_end_clean();
    $output = array(  
        'age'     =>     $age,  
        'brand'       =>    $brand,
        'food'  =>     $food
      );  
      echo json_encode($output);                
              
         ?>
     