$(document).ready(function(){

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
         setHandlers();
              
        },
        error: function(data){
          alert(data.responseText);
        },
        contentType : false,
        processData : false
      });
  });

  setHandlers();

});

function setHandlers(){

  // $(".botonAgregarImagenes").on("click", function(event){
          
  //     event.preventDefault();

  //     var archivos = $("#imagesToUpload").prop('files');

  //     if(typeof(archivos) == 'undefined'){
  //       mostrarMensaje("No pusiste imagenes");
  //       return;
  //     }

  //     var datos = new FormData();

  //     $.each(archivos, function(key,value){
          
  //       datos.append(key,value);
  //     });

  //     $.ajax({

  //         type: "POST",
  //         dataType: "json",
  //         url: event.target.href,
  //         data: datos,
  //         success: function(data){
  //             alert(data.result);
  //         },
  //         error: function(){
  //             alert("No anduvo la llamada AJAX");
  //         },
  //         contentType : false,
  //         processData : false
  //     });
  // });



  $(".borrarBtn").on("click", function(event){

    event.preventDefault();
    
    $.ajax({
      type: "POST",
      dataType: "html",
      url: event.target.href,
      success: function(data){
        //alert(data.result);
        $("#noticias").html(data);
        setHandlers();
      },
      error: function(data){
        alert(data.responseText);
      },
      contentType : false,
      processData : false
    });
  });

  $(".botonAgregarImagenes").on("click", function(event){

    event.preventDefault();
    
    $.ajax({
      type: "POST",
      dataType: "html",
      url: event.target.href,
      success: function(data){
        //alert(data.result);
        $("#imagenes").html(data);
        setHandlers();
      },
      error: function(data){
        alert(data.responseText);
      },
      contentType : false,
      processData : false
    });
  });
}


