<?php
include('./firebase/index.php');

function startsWith ($string, $startString) 
{ 
	$len = strlen($startString); 
	return (substr($string, 0, $len) === $startString); 
} 


$res=array();
$path="pet_info/";
$search_str="";
$str="";

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
        	?>
            <a href="petDetails.php?key=<?php echo $key;?>" style="color: black;"><?php echo $value; ?></a>
            <?php
             }
             	
             }
    else {
            echo "No results found";
             }         
     }         
         ?>
         

     	
     