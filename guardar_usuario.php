<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pirerayen";

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener los valores del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$empresa = $_POST['empresa'];
$servidores = $_POST['servidores'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$sector = $_POST['sector'];
$interno = $_POST['interno'];
$email = $_POST['email'];
$impresora = $_POST['impresora'];
$ip = $_POST['ip']; // Nuevo campo "ip"

// Preparar la consulta SQL para insertar el nuevo usuario
$sql = "INSERT INTO usuarios (nombre, apellido, empresa, servidores, usuario, contraseña, sector, interno, email, impresora, ip)
        VALUES ('$nombre', '$apellido', '$empresa', '$servidores', '$usuario', '$contraseña', '$sector', '$interno', '$email', '$impresora', '$ip')";

if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
