<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
		    function conecta(){
                $conexion = mysql_connect('localhost','root','') or die (mysql_error());
                mysql_select_db('directorio',$conexion);
				}
				$con = conecta();
				$query = 'SELECT * FROM contacto';				
				$ejecuta = mysql_query($query);
				$count = mysql_num_rows($ejecuta);
				
                $resultado = mysql_fetch_object($ejecuta);
                $contador = 0;
                echo "</br><table border = '5' cellspacing = '5'> ";
				echo"<th>ID</th><th>Nombre</th><th>Telefono</th><th>Celular</th><th>Domicilio</th><th>OPCIONES</th>";
                while($contador < $count){
                    echo "<tr><td>".$resultado -> id."</td><td>".$resultado -> nombre."</td><td>".$resultado -> telefono."</td>
					<td>".$resultado -> celular."</td><td>".$resultado -> domicilio."</td>
					<td><input type = 'submit' value = 'Insertar'/>
					<a href = 'Ver.php'><input type = 'submit' value = 'Ver'/></a>
					<input type = 'submit' value = 'Editar'/>
					<input type = 'submit' value = 'Eliminar'/>
					</td></tr>";
					$resultado = mysql_fetch_object($ejecuta);
                    $contador++;
                }
                echo "</table>";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        ?>
    </body>
</html>