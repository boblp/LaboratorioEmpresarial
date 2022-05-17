<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$para = 'info@laboratorioempresarial.com';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Asunto: $asunto\n Telefono: $telefono\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'https://laboratorioempresarial.com';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
