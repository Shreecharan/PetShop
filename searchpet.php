<?php
include('./firebase/index.php');

function startsWith ($string, $startString) 
{ 
	$len = strlen($startString); 
	return (substr($string, 0, $len) === $startString); 
} 


$petres=array();
$petpath="pet_info/";
$pet_str="";
$res_str="";
$pet_search = '';
$data = $database->getReference($petpath)->getvalue();
    if (isset($_POST['query'])) {

        $query=$_POST['query'];
    	$pet_str.=$query;
    	$res_str= strtolower($pet_str);
        foreach ($data as $key => $value) {
        	if(startsWith(strtolower($value['pname']),$res_str)) {
        	    //array_push($res, array($key=>$value['pname']));
        	    $petres[$key]=	$value['pname'];
            }
        }
       
         
         
    $len=count($petres) ;     
    if($len > 0)  {      
        foreach ($petres as $key => $value) {
        	$pet_search .= '

            <a href="petDetails.php?key=<?php echo $key;?>" style="color: black;"><?php echo $value; ?></a>';
            
             }
             	
             }
    else {
            $pet_search = '
               "No results found"';
             }         
     }         
         ?>
         

     	
     