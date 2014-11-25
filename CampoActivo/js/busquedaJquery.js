



$("#formBusquedaM").submit(function() 
{
  $.ajax({
    url: 'index.php',
    type: "POST",
    data:$("#formBusquedaM").serialize(), 
   success: function(data) {
      $("#resMaquinas").html(data);
    }
    
  });
  return false;
});





$("#formBusquedaE").submit(function() 
{
  $.ajax({
    url: 'index.php',
    type: "POST",
    data:$("#formBusquedaE").serialize(), 
   success: function(data) {
      $("#resEventos").html(data);
    }
    
  });
  return false;
});
