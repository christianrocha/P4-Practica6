    <?php
    session_start();
    if(!isset($_SESSION['codigo'])){
    header('Location: Sesion.php');
    }
    ?>
<html>
    <head>
    <title>Nuevo</title>
    </head>
    <body>
        <h1>Nuevo Contacto</h1>
        <a href = 'Cerrar.php'><h3>cerrar sesion</h3></a>
        <form method = 'post' action = 'Ver.php'> 
            <center>
            <fieldset style = 'width : 35%;'>
            <legend><h3>Ingrese su Usuario</h3></legend><br/>
		    <div align = left>			
                Nombre: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'nombre'/>
				<br/>
                <br/>
                Telefono: </br>				
                <input type = 'text' size = '40' maxlength = '255' name = 'tel'/>
				<br/>
                <br/>
                Celular: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'cel'/>
				<br/>
                <br/>
				Domicilio: </br>
                <input type = 'text' size = '40' maxlength = '255' name = 'dom'/>
                <br/>
                <br/>
			</div>
                <a href = 'Nuevo.php'><input type = 'submit' value = 'Guardar'/></a> 				
            </fieldset>                                                           
            </center> 				
        </form>  	
    </body>
</html>