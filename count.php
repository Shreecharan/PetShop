<?php 
     include('./firebase/index.php');
     $ref = "product_info";
                      
                        $data=$database->getReference($ref)->getValue();
                        $brandarr = array("royal canin" => "b1", "farmina"=>  "b2", "orijen"=> "b3" ,"sunseed"  => "b4", "taste of the wild"=>"b5", "hills sceince diet"=>"b6", "acana" => "b7");
                        $foodcat =  array("dry food"=>"c1", "gravy food"=> "c2","puppy food" => "c3","veg food" => "c4", "human grade food" => "c5","biscuits"  => "c6", "treats" => "c7");
                        $productcat = array( "dog" => 'p1'  , "cat" => 'p2', "fish" => "p3","bird" => "p4"  );
                        foreach ($data as $key1 => $value1) {
                               foreach ($brandarr as $key2 => $value2) 
                               { 
                                     if ($value1 == $key2) 
                                    { 
                                        $count++; 
                                      } 
                                } 
    

                                

                        ?> 