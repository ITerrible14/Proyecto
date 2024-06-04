<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <style>
        #form{
            text-align: center;
        }
        </style>
</head>

<body>
    <center><form action="register_admin.php" method="POST">
    
        <label for="username"    style="text-align: center">Nombre de Usuario:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Registrarse</button>
    </form></center>
</body>
</html>