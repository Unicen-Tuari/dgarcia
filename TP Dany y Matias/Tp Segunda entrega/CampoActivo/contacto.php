<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
       	
		<title>Campo Activo S.A.</title> 
        
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	</head>
	<body>
		<nav id='menuPrincipal'>
            <div class='menu'>
            
                <ul>
                  <li><a href="index.php">Inicio</a></li>
                    <li><a href="resenia.php">Reseña</a></li>
                    <li id='Maquinarias'><a>Maquinarias</a>
                        <ul>
                        	<li><a href="maquina.php?q=N">Nuevas</a></li>
                            <li><a href="maquina.php?q=U">Usadas</a></li>                            
                        </ul>
                    </li>
                    <li><a href="eventos.php">Eventos</a></li>
                    <li><a href="galeria.php">Galería</a></li>
                    <li><a href="contacto.php">Contacto</a></li>            
           	    </ul>           
                <form action='busqueda.php' id='search' method='GET' name='q' style='display:inline;'> 
                  <input id='search-box' size='28' type='text' value='Buscar...' name='q'></input>
               </form>
            </div>
        </nav>
        <div id ='logo'>
            <img src="images/logo.png" width="250" height="120"  alt=""/>
        </div>
		<h1>Contacto:</h1>
    
        <section class="contactoSection">
		<!--Para que se pueda hacer Contacto con le Concesionario -->
			<form action="insertarContacto.php" method="post">
				<fieldset>
                    <div id='facebook'><a href="https://www.facebook.com/cristian.peronja.1">
                    	<img src="images/facebook.jpg" width="121" height="36"  alt=""/></a>
                    </div>
					<div class=" adentro"><br>
						Nombre:  
                        <input type="text" name="Nombre" required>*<br>
                        Apellido:
                        <input type="text" name="Apellido" required>*<br>
                        Teléfono:   
                        <input type="tel" name="Telefono"><br>
                        E-Mail: 
                        <input type="email" name="Correoelectronico" required size=40>*<br>
                        Comentario:<br>
                        <textarea rows="6" cols="65" name="Cometario"></textarea><br>
						<h5>* Campo Obligatorio</h5>
                        <div class="links">
                        	<h5>
                                <a href="http://www.rednh.com.ar/" target="_blank">
                                Busque su concesionario más cercano de New Holland. Aquí!</a>
                            </h5>
                        </div>

						<input type="submit" class="button" value="Contactar">
						<br>
					</div>    
				</fieldset>
			</form>
		</section>

        <h1><br>Ubicacion Satelital</h1>
        <div class="mapa">
        		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2799.827187409258!2d-59.842185974121094!3d-36.79340037765881!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2s!4v1403727301661" width="600" height="450" frameborder="0" style="border:0"></iframe>
        </div>

        <div class="links">
        	<h1><br>Enlaces:</h1>
    		<p>
    			<a href="http://agriculture.newholland.com/AR/es/Pages/homepage.aspx" target="_blank" >New Holland Agriculture S.A</a>
    			<a href="http://www.newholland.com.ar" target="_blank" > <br><br>Bienvenidos al mundo de New Holland</a>
    		</p>
        		
        </div>

        <footer>
			<small>
		       Copyright &copy; 2014 Daniela - Matias
			</small>   
		</footer>
	</body>
</html>