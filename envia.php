 <?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$mensaje = $_POST["mensaje"];
$para = "alejandro.deliaa@gmail.com";
$titulo = "Consulta desde la Web";
$header = "From: ". $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Tel: $tel\n Mensaje:\n $mensaje";

if ($_POST["submit"]) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'index.php';
</script>";
} else {
echo "Falló el envio";
}
}
?>