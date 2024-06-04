<?php
session_start();

$mysql = new mysqli("localhost", "root", "", "proyecto");
$oMysql = new mysqli("localhost", "root", "", "proyecto");

// Verificar la conexión
if ($mysql->connect_error) {
    die("Error de conexión: " . $mysql->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$ti = $_POST['ti'];
$universidad = $_POST['universidad'];
$lic = $_POST['lic'];
$grado = $_POST['grado'];
$exp = $_POST['exp'];


if(isset($_SESSION['usuario_id'])) {
    $usuarios_id = $_SESSION['usuario_id'];

    $Query = "SELECT id FROM datos WHERE usuarios_id='".$usuarios_id."'";
    $result = $oMysql->query($Query);
    
    if($result->num_rows > 0){
        $sql = "UPDATE datos SET  nombre = ?, apellido = ?, edad = ?, sexo = ?, correo = ?,  telefono = ?,  ti = ?, universidad = ?, licenciatura = ?, grado =?, exp = ?, usuarios_id=? WHERE usuarios_id = '".$_SESSION['usuario_id']."'";
        $stmt = $mysql->prepare($sql);
    }else{
        $sql = "INSERT INTO datos ( nombre, apellido, edad, sexo, correo, telefono, ti, universidad, licenciatura, grado, exp, usuarios_id) VALUES ( ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysql->prepare($sql);
    }

    // Preparar la consulta para insertar los datos en la tabla 'datos'
    $stmt->bind_param("ssississsssi", $nombre, $apellido, $edad, $sexo, $correo, $telefono, $ti, $universidad, $lic, $grado, $exp, $usuarios_id);
    
    if ($stmt->execute()) {
        header("Location: Menu.php");
    } else {
        echo "Error al insertar los datos.";
    }
    
    // Cerrar la declaración preparada
    $stmt->close();

} else {
    echo "El usuario no está autenticado.";
}

// Cerrar la conexión
$mysql->close();
?>