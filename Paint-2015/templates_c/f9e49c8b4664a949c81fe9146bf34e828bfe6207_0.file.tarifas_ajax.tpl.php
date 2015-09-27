<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-27 22:34:15
         compiled from "C:\xampp\htdocs\Paint-2015\templates\tarifas_ajax.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_560852c7cd1258_30179326',
  'file_dependency' => 
  array (
    'f9e49c8b4664a949c81fe9146bf34e828bfe6207' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\templates\\tarifas_ajax.tpl',
      1 => 1443300505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_560852c7cd1258_30179326')) {
function content_560852c7cd1258_30179326 ($_smarty_tpl) {
?>

<div class="top-banner"></div>
<div class="container">
			<div class="service-info">
				<h3>Tarifas</h3>
				<p>Consulte el valor neto del o los servicios que desea contratar.</p>
			</div>
</div>
<br><br>
<div class="table-responsive">  
	<div class="col-md-12 col-sm-9 text-center">   
         <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="success">
                                <th class="text-center">Servicio</th>
                                <th class="text-center">Precio</th>
                            </tr>
                            <tbody>
	                            <tr> 
	                                <td>$arr_caract.nombre</td>
	                                <td>$arr_caract.mango</td>
	              
	                            </tr>
	                            <tr>
	                                <td>$arr_caract.nombre</td>
	                                <td>$arr_caract.mango</td>
	              
	                            </tr>
	                            <tr>
	                                <td>$arr_caract.nombre</td>
	                                <td>$arr_caract.mango</td>
	              
	                            </tr>
                        	</tbody>
                        </thead>                        
            </table>
            </div>
        </div>
    <br><br><br><br>
<?php }
}
