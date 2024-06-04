<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css" title="Color">
<link rel="stylesheet" href="styler.css" title="Color">
<title>Documento sin t&iacute;tulo</title>
<style>
#menu ul {
    list-style-type: none;/*desactiva viñetas*/
    margin: 0;
    padding: 0;
    overflow: hidden; /*Especifica qué sucede si el contenido
    del cuadro de un elemento se desborda */
    background-color: #53ddff;
}

#menu li {
    float: left;
}

#menu li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

#menu li a:hover { /*Cuando pasa el mouse sobre el elemento*/
    background-color: #f1d517;
    color: #333;
}

#menu li a:active { /*Cuando da click en el mouse */
    filter: brightness(75%);
    font-size: 120%;
}

#menu li:last-child {
    float: right;
    color: white;
}

* {
    box-sizing: border-box; /*define cómo se calculan el ancho y la altura de un elemento*/
}

input[type=text], input[type="email"], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #e69346;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #3e403a;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

legend {
    font-family: Georgia, serif;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>

<body>
<nav id="menu">
    <ul>
        <li><a href="eliminar.php" target="">Eliminar</a></li>
        <li><a href="mostrar.php" target="">Consultar</a></li>
        <li><a href="index.php" target="">Regresar al inicio</a></li>
    </ul>
</nav>

<?php
session_start();
$id = $_GET['id'];

$mysql = new mysqli("localhost", "root", "", "proyecto");

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

// Primero, eliminar registros dependientes
$Query5 = "DELETE FROM datos WHERE usuarios_id = '$id'";
$Result5 = $mysql->query($Query5);

// Luego, eliminar el registro principal
$Query = "DELETE FROM usuarios WHERE id = '$id'";
$Result = $mysql->query($Query);

if ($Result && $Result5) {
    echo '<h1 align="center">Se ha hecho con éxito</h1>
    <div style="margin-left: 20px; margin-right: 20px;" id="prueba" align="center">
        Te sugerimos ir a "Consultar" de nuestro menú de arriba para verificar que el registro y los datos son correctos
    </div>';
} else {
    echo '<h1 align="center">¡Lo sentimos!</h1>
    <div style="margin-left: 20px; margin-right: 20px;" id="prueba" align="center">
        Al parecer hubo un error con el registro, revisa tu conexión a internet y que los datos sean correctos
    </div>';
}

// No es necesario quitar y agregar de nuevo la clave foránea si ya se eliminó en la base de datos.
?>

</body>
</html>
