// You can also use "$(window).load(function() {"
$(function () {

	$("#slider").responsiveSlides({
      auto: false,
      nav: false,
      speed: 500,
      namespace: "callbacks",
      pager: true,
    });
	// Slideshow 4
	$("#slider2").responsiveSlides({
		auto: true,
		pager: true,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
			$('.events').append("<li>before event fired.</li>");
		},
		after: function () {
			$('.events').append("<li>after event fired.</li>");
		}
	});	
	
	//si no esta definido lo defino
	if ($("#toTop").length==0){
		$().UItoTop({ easingType: 'easeOutQuart' });
	}

	$("#bs-example-navbar-collapse-1 ul li").unbind();//para evitar multiples triggers
	$("#bs-example-navbar-collapse-1 ul li").not("li.dropdown").click(function(e){
		//selecciono todos los li del menu que no son dropdown

		$(".nav.navbar-nav.navbar-right li").removeClass("active");//desactiva la pestaña anterior
		$(this).addClass("active");//activa la pestaña

		//localizamos cada elemento del menu
		e.preventDefault();//anula el click asi no navega
		var contenido=$(this).children("a").attr("id");	//obtenemos el id

		//cargamos contenido del id deseado
		
		var attr=$(this).attr("id-categoria");
		if (typeof attr !== typeof undefined && attr !== false) {
			var auxString='';
		} else {
			var idCategoria = $(this).children("a").attr("id-categoria");
			//console.log($(this));
			var auxString='&categoria='+idCategoria;
		}
		$.get( "index.php?action="+contenido+auxString, function( data ) {
			$(".contenido").html(data);//ponemos el resultado de la pagina en el div contenido
		 	$.getScript('js/funciones.js');//llamamos al js aca para que tenga contenido a la hora de aplicar
		});		
	});	

	$(".link-noticia").unbind();//para evitar multiples triggers
	$(".link-noticia").click(function(e){
		e.preventDefault();//anula el click asi no navega
		var idNoticia=$(this).attr("id-noticia");
		$.get( "index.php?action=amplia_noticia&id_noticia="+idNoticia, function( data ) {
			// console.log("carge el contenido del amplia");
			$(".contenido").html(data);//ponemos el resultado de la pagina en el div contenido
		 	$.getScript('js/funciones.js');//llamamos al js aca para que tenga contenido a la hora de aplicar
		});	
	});

	$(".scroll").click(function(event) {		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
	});	
});
  
addEventListener("load", function() {
	setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); 
};