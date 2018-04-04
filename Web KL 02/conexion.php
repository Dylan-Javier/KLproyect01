
<?php
$hostname    = "localhost";
$usuario     = "root"; /*nombre del administrador de la base de datos*/
$password    = ""; /*contraseña del administrador de la base de datos*/
$basededatos = "datos"; /*nombre de la base de datos*/

$mysqli = new mysqli($hostname, $usuario, $password, $basededatos);
if (mysqli_connect_errno()) {
    echo "Error de conexión a la BD: " . mysqli_connect_error();
    exit();
} else {

}