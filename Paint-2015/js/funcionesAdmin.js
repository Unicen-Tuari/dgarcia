
$(".botonAgregarImagenes").on("click", function(event){
        
    event.preventDefault();

    var archivos = $("#imagesToUpload").prop('files');

    if(typeof(archivos) == 'undefined'){
      mostrarMensaje("No pusiste imagenes");
      return;
    }

    var datos = new FormData();

    $.each(archivos, function(key,value){
        
      datos.append(key,value);
    });

    $.ajax({

        type: "POST",
        dataType: "json",
        url: event.target.href,
        data: datos,
        success: function(data){
            alert(data.result);
        },
        error: function(){
            alert("No anduvo la llamada AJAX");
        },
        contentType : false,
        processData : false
    });
});

$("#miform").on("submit", function(event){
        
    event.preventDefault();
        
    $.ajax({
      type: "POST",
      dataType: "html",
      url: event.target.action,
      data: new FormData(this),
      success: function(data){
        //alert(data.result);
       $("#noticias").html(data);
            
      },
      error: function(data){
        alert(data.responseText);
      },
      contentType : false,
      processData : false
    });
});

$(".borrarBtn").on("click", function(event){

  event.preventDefault();
  
  $.ajax({
    type: "POST",
    dataType: "html",
    url: event.target.href,
    data: new FormData(this),
    success: function(data){
      //alert(data.result);
      $("#noticias").html(data);
    },
    error: function(data){
      alert(data.responseText);
    },
    contentType : false,
    processData : false
  });
});
