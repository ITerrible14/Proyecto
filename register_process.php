<?php

$mysql = new mysqli("localhost", "root", "", "proyecto");

// Verificar la conexión
if ($mysql->connect_error) {
    die("Error de conexión: " . $mysql->connect_error);
}

// Obtener datos del formulario de registro
$username = $_POST['username'];
$password = $_POST['password'];
$admin = "false";
$fechaActual = date('Y-m-d H:i:s');

// Insertar usuario en la base de datos
$sql = "INSERT INTO usuarios (username, password, admin, fecha) VALUES (?, ?, ?, ?)";
$stmt = $mysql->prepare($sql);
$stmt->bind_param("ssss", $username, $password, $admin, $fechaActual);

if ($stmt->execute()) {
      
    echo "<script>alert('Usuario registrado.');
    window.location.href = 'index.php';</script>";
} else {
    echo "Error al registrar usuario: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$mysql->close();
?>
