$(document).ready(function(){

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
