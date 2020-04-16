<?php
include('./firebase/index.php');

function startsWith ($string, $startString) 
{ 
	$len = strlen($startString); 
	return (substr($string, 0, $len) === $startString); 
} 


$res=array();
$path="product_info/";
$search_str="";
$str="";
$prod_search = '';
$data = $database->getReference($path)->getvalue();
    if (isset($_POST['query'])) {

        $query=$_POST['query'];
    	$search_str.=$query;
    	$str= strtolower($search_str);
        foreach ($data as $key => $value) {
        	if(startsWith(strtolower($value['pname']),$str)) {
        	    //array_push($res, array($key=>$value['pname']));
        	    $res[$key]=	$value['pname'];
            }
        }
       
         
         
    $len=count($res) ;     
    if($len > 0)  {      
        foreach ($res as $key => $value) {
        	
            $prod_search .= "<li><a href='productDetails.php?key=$key'>$value</a></li>";
            
             }
             	
             }
    else {
            $prod_search .='<br><li> No results found </li>';
             }         
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
                $petres[$key]=  $value['pname'];
            }
        }
       
         
         
    $len=count($petres) ;     
    if($len > 0)  {      
        foreach ($petres as $key => $value) {
            $pet_search .= "<li><a href='petDetails.php?key= $key'>$value</a></li>";
            
             }
                
             }
    else {
            $pet_search = '<br>
               <li>No results found</li>';
             }  
    $output = array(  
        'pet_search'     =>     $pet_search,  
        'prod_search'       =>    $prod_search 
      );  
      echo json_encode($output);                
     }         
         ?>
         

     	
     