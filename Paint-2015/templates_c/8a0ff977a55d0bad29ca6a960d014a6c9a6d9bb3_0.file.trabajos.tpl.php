<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-24 20:51:09
         compiled from "C:\xampp\htdocs\Paint-2015\templates\trabajos.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5604461ddc6488_83301907',
  'file_dependency' => 
  array (
    '8a0ff977a55d0bad29ca6a960d014a6c9a6d9bb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\templates\\trabajos.tpl',
      1 => 1443120133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_5604461ddc6488_83301907')) {
function content_5604461ddc6488_83301907 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false)->render();
?>


<!-- projects -->
<div class="projects">
	 <div class="container">
			<div class="projects-info">
				<h3>Nuestros Trabajos</h3>
				<p>Le damos calidez a cada espacio de tu hogar.</p>
			</div>
		 <div class="event-grids">
			 <div class="col-md-4 event-grid-sec">
				 <div class="event-time text-center">
					 <p>03/2015</p>
				 </div>
				 <div class="event-grid_pic">
					 <img src="images/pc.jpg" alt=""/>
					 <h3><a href="#">Dormitorios</a></h3>
					 <p>Un lugar &uacute;nico y personal donde el so&ntilde;ar, no tiene l&iacute;mites.</p>
					 <div class="more"><a href="single.html">> M&aacute;s im&aacute;genes</a></div>
				 </div>
			 </div>
			 <div class="col-md-4 event-grid-sec">
				 <div class="event-time text-center">
					 <p>02/2015</p>
				 </div>
				 <div class="event-grid_pic">
					 <img src="images/pc1.jpg" alt=""/>
					 <h3><a href="#">Salas de estar</a></h3>
					 <p>El mejor lugar para el reencuentro.</p>
					 <div class="more"><a href="single.html">> M&aacute;s im&aacute;genes</a></div>
				 </div>
			 </div>
			 <div class="col-md-4 event-grid-sec">
				 <div class="event-time text-center">
					 <p>04/2015</p>
				 </div>
				 <div class="event-grid_pic">
					 <img src="images/pc2.jpg" alt=""/>
					 <h3><a href="#">Espacios recreativos</a></h3>
					 <p>Un lugar creado para pasar momentos de distensi&oacute;n. Donde ni&ntilde;os y adultos se divierten.</p>
					 <div class="more"><a href="single.html">> M&aacute;s im&aacute;genes</a></div>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div> 

<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
}
}
