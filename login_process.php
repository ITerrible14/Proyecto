<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

$mysql = new mysqli("localhost", "root", "", "proyecto");

// Verificar la conexión
if ($mysql->connect_error) {
    die("Error de conexión: " . $mysql->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username']; 
$password = $_POST['password'];


// Buscar el usuario en la base de datos
$Query = "SELECT * FROM usuarios WHERE username ='".$username."'";
$Result = $mysql->query($Query);

if ($Result === false) {
    die("Error al ejecutar la consulta: " . $mysql->error);
}

// Verificar si se encontró el usuario
if ($Result->num_rows > 0) {
    $row = $Result->fetch_assoc(); // Obtener la fila de resultados
    $usuario_id = $row['id'];
    // Verificar la contraseña
    if ($username==$row['username'] &&  $password==$row['password']) {
        // Contraseña correcta: Iniciar sesión y establecer variables de sesión
        $_SESSION['usuario_id'] = $usuario_id;
        $_SESSION['username'] = $username;

        if($row['admin']=="false"){
            header("Location: Formulario.php");
        }else if ($row['admin']=="true"){
            header("Location: menu-admin.php");
        }
        
        //header("Location: formulario.php"); // Redirigir a la página principal después de iniciar sesión
        //exit; // Finalizar el script después de redirigir
    } else {
        // Contraseña incorrecta

        echo "<script>alert('Contraseña incorrecta.');
        window.location.href = 'index.php';</script>";
?>
       <br> <a href="index.php">Regresar al inicio</a> 
<?php
    }
} else {
    // Usuario no encontrado
   
    echo "<script>alert('Usuario no encontrado.');
    window.location.href = 'index.php';</script>";
?>
    <br> <a href="index.php">Regresar al inicio</a> 
<?php
    
    exit; // Finalizar el script después de redirigir
}

// Cerrar la conexión
$mysql->close();
?>
