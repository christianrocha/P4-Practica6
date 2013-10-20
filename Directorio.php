<!DOCTYPE html>
<html>
    <head></head>
    <body>
	    <a href = 'Sesion.php'><h3>cerrar sesion</h3></a>
        <div>
        <form method = 'post' action = 'Nuevo.php'>  
        <input type="submit" value="Nuevo" />
		</br>
        </form>
        </div>      
    </body>
</html>

<?php 
    session_start();
    if(!isset($_SESSION['codigo'])){
	    header('Location: Sesion.php');
    }
	require_once('Conexion.php');
?>