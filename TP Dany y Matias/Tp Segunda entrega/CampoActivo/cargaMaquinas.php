<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" type="text/css" href="css/styleespecial2.css">
        <title>Campo Activo S.A.</title> 
        
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	</head>
<body>
<div id ='logo'>
        	<img src="images/logo.png" width="250" height="120"  alt=""/>
</div>
<h1>Alta de maquinarias</h1>
    
        <section class="altaSection">
			<form action="cargaMaquinasBase.php" method="post">
				<fieldset>
                
						<div class=" adentro"><br>
							Nombre:  
                            <input type="text" name="nombre" required><br>
                            Tipo: 
                            <input type="text" name="tipo" required ><br>
                            Modelo: 
                            <input type="number" name="modelo" required min="1900" max="3099" size=5><br>
                            Estado (U: Usado - N: Nuevo:)
								<select enabled name="estado"  required >
								  	<option value="N"> N </option>
						  			<option value="U"> U </option>
								</select><br>
                            Ruta:
                            <input type="text" name="ruta" size= 75 required ><br>
                            Precio: U$S
                            <input type="text" name="precio" required size=20><br>
                            Descripción:<br>
                            <textarea rows="6" cols="60" name="texto" required></textarea><br>
							<h5>Todos los campos son obligatorio</h5>
							
                            <input type="submit" value="Agregar" class="button">

							<br>
						</div>
					</fieldset>
			</form>
			
		</section>
		<br>
	<footer>
			<small>
		                Copyright &copy; 2014 Daniela - Matias
			</small>   
	</footer>
</body>
</html>