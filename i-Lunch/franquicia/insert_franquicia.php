<?php
 
// Conexion con la BD
require('../configuraciones/conexion.php');

$nit = $_POST["nit"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$costo_franquicia = $_POST["costo"];
$valoracion_comercial = $_POST["valoracion_comercial"];
$admin = $_POST['admin'];

// Verificar si admin es NULL o tiene valor
if($admin == "NULL") {
	// Query SQL
	$query = "INSERT INTO `franquicia`(`nit`,`nombre`, `correo`, `telefono`, `costo_franquicia`, `valoracion_comercial`, `administrador_tipo_id`, `administrador_numero_id`) VALUES ('$nit', '$nombre', '$correo', '$telefono', '$costo_franquicia', '$valoracion_comercial', NULL, NULL)";

} else{
	// Dividir los dos valores del mismo input
	$admin = explode('|', $admin);
	$administrador_tipo_id = $admin[0];
	$administrador_numero_id = $admin[1];
	
	// Query SQL
	$query = "INSERT INTO `franquicia`(`nit`,`nombre`, `correo`, `telefono`, `costo_franquicia`, `valoracion_comercial`, `administrador_tipo_id`, `administrador_numero_id`) VALUES ('$nit', '$nombre', '$correo', '$telefono', '$costo_franquicia', '$valoracion_comercial', '$administrador_tipo_id', '$administrador_numero_id')";
}

// Ejecutar consulta
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

// Redirigir al usuario a la misma pagina
if($result):
	header ("Location: franquicia.php");
else:
	echo "Ha ocurrido un error al crear la persona";
endif;