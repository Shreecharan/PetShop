/*$(document).ready(function(){

  load_data();

function load_data(query)
 {
  $('.search-results').html();
  var action= "search_data";
  $.ajax({
   url:"./searchpet.php",
   method:"POST",
   data:{action:action, query:query},
   success:function(data)
   {
    $('.search-results').html('<h2>' + data + '<h2>');
    
   }
  });
 }


    $('#search').keyup(function(){

  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
*/
$(document).ready(function(){

  load_data();

function load_data(query)
 {
  $('.search-results').html();
  var action= "search_data";
  $.ajax({
   url:"./searchprod.php",
   method:"POST",
   dataType:"json",
   data:{action:action, query:query},
   success:function(data)
   {
    //$('.search-results').html('<h6 style="color: black;">' + data.pet_search + '</h6>' + '<h6 class="move-right" style="color:black;">' + data.prod_search + '</h6>' );
    $('.prod_res').html('<ul><b><i><u><li>Product_Result</u></i></b></li>'+$.trim(data.prod_search)+'</ul>');
    $('.pet_res').html('<ul><b><i><u><li>Pet_Result</u></i></b></li>'+$.trim(data.pet_search)+'<ul>');
    console.log(data);
   }
  });
 }


    $('#search').keyup(function(){

  var search = $(this).val();
  if(search == '')
  {
   load_data();
  }
  else
  {
   load_data(search);
   
  }
 });
});
