<?php
 include 'conexion.php';
 $usuario=$_REQUEST['usuario'];
 $password=$_REQUEST['password'];
 $query="SELECT * FROM usuarios where usuario='$usuario' and password='$password'";
 $resultado = $mysqli->query($query);
if ($resultado->num_rows > 0) {
echo "usuario correcto";}
				
?>