<?php

//se arma el array POST
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$mensaje = $_POST["mensaje"];

$destino = "mail@mail.com,mail2@mail.com";
$asunto = "Contacto desde el sitio";
$mensaje = "Nombre: " . $nombre . " Email: " . $email . " numero: " . $numero . " Mensaje: " . $mensaje;

$header = "From: " . $nombre . "<" . $email . ">";

$enviado = mail($destino, $asunto, $mensaje, $header);

if ($enviado) {
	echo "Su correo ha sido enviado.";
} else {
	echo "Hubo un error en el envío del correo.";
}

include "conexion.php";

$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre, email, numero, mensaje) VALUES ('$nombre', '$email', '$numero', '$mensaje')") or die(mysqli_error($conexion));

?>