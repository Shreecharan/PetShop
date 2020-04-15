<?php
    include('./firebase/index.php');
    $path="pet";
    $petdata = $database->getReference($path)->getValue();
    if(isset($_POST["action"]))
    {   
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
                ?>
            <div class="radio">
            <label id="rad"><input type="checkbox" class="common_slidebar breed onbreedclick" id="breedsel" name="optradio" value="<?php echo $data[$i];?>"><?php echo $data[$i];?></label>
          </div>
         <?php
        }   
          	
        }   

?>
<script type="text/javascript" >
/*    
    $(document).ready(function(){
    $('.common_selector').click(function(){
        var breed=get_filter('breedselect');
        //alert(breed);
        $.ajax({
            url:"shopbypet.php",
            method:"POST",
            data:{breed:breed},
            success:function(data){
                  
            }
            });
    });
    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }
    });
*/
</script>