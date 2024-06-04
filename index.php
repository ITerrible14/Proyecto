<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesi&oacute;n</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>

</head>
<body>
<center>    
<h2>Iniciar Sesi&oacute;n</h2>
    <form action="login_process.php" method="POST">
        <label for="username" style="text-align: center">Nombre de Usuario:</label>
        <br><input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Contrase&nacute;a:</label>
        <br><input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Iniciar Sesi&oacute;n</button><br><br>
        <button onclick="location.href='register.php'">Registrarse como usuario</button><br><br>

    </form>
    </center>
</body>
</html>
