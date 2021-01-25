<?php
$destinatario ='sicdebsas@gmail.com';
$nombre = $_POST ['nombre']
$asunto = $_POST ['asunto']
$mensaje = $_POST ['mensaje']
$email = $_POST ['email']

$header = "Enviado des la pagina de Diseños y Efectos";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $ header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";