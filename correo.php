<?php
$destino ="eli.abraham81@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido= "Nombre:". $nombre . "<br/> Correo: " . $correo . "<br/>Telefono: " . $telefono ."<br/>Mensaje: " . $mensaje;

mail($destino, "Contacto", $contenido);
header("Location: gracias.html");
echo $contenido
?>