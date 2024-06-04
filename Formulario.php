<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario</title>
    <style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
}

.contacto {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    width: 100%;
    animation: fadeIn 1s ease-in-out;
}

h2 {
    margin-bottom: 20px;
    color: #333;
    text-align: center;
    animation: slideDown 1s ease-in-out;
}

form {
    display: flex;
    flex-direction: column;
}

legend {
    font-size: 1.2em;
    margin-bottom: 10px;
    color: #555;
}

label {
    margin-bottom: 15px;
    color: #444;
}

input[type="text"],
input[type="number"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: all 0.3s ease;
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="email"]:focus {
    border-color: #007BFF;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
}

.radiogroup {
    margin-bottom: 15px;
}

input[type="radio"] {
    margin-right: 10px;
}

button {
    padding: 10px 15px;
    margin-top: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007BFF;
    color: #fff;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

button[type="reset"] {
    background-color: #dc3545;
}

button[type="reset"]:hover {
    background-color: #c82333;
}

/* Animaciones */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
</head>
<body>
    <div class="contacto">
        <h2>Formulario</h2>
        <form class="form" action="register_data.php" method="POST" enctype="multipart/form-data">
                    <legend>Datos personales</legend>
                  
                    Nombre:
                        <input type="text" name="nombre" id="nombre" placeholder="Tu nombre o nombres" required> *
                    <br>
                    <br>
                    <label for="apellido"> Apellido:
                        <input type="text" name="apellido" id="apellido" placeholder="Tus apellidos" required> *
                    </label>
                    <br>
                    <br>
                    <label for="edad"> Edad:
                        <input type="number" name="edad" id="edad" required> *
                    </label>
                    <br>
                    <br>

                    <radiogroup>
                        <label for="promociones">Sexo:</label>
                        <br>
                        <input type="radio" id="sexo" name="sexo" value="hombre"> Hombre<br>
                        <input type="radio" id="sexo" name="sexo" value="mujer"> Mujer<br>
                        <input type="radio" id="sexo" name="sexo" value="otro" autofocus checked> Otro<br>
                    </radiogroup>
                    <br>
                    <label for="correo"> Tu correo electr&oacute;nico:
                        <input type="email" name="correo" id="correo" placeholder="tucorreo@dominio.com" validate="true">
                    </label>
                    <br>
                    
                    <br>
                    <label for="telefono"> Tu numero de telefono:
                        <input type="number" name="telefono" id="telefono" require>
                    </label>
                    <br>

                    <br>
                    <label for="ti"> Cuentanos sobre ti:
                        <input type="text" name="ti" id= "ti" >
                    </label>
                    <br>


                  <legend>Datos escolares</legend>
                  <br>
                    <label for="uni"> Universidad:
                        <input type="text" name="universidad" id="universidad" placeholder="Nombre de la universidad">
                    </label>
                    <br>
                    <br>
                    <label for="uni"> Licenciatura:
                        <input type="text" name="lic" id="lic" placeholder="Nombre de la carrera">
                    </label>
                    <br>
                    <br>
                    <label for="uni"> Ultimo grado:
                        <br>
                        <input type="radio" id="grado" name="grado" value="Lic"> Licenciatura<br>
                        <input type="radio" id="grado" name="grado" value="Maes"> Maestria<br>
                        <input type="radio" id="grado" name="grado" value="Doc" > Doctorado<br>
                    </label>
                    
                    <label for="exp"> Experiencia:
                        <br>
                        <input type="text" name="exp" id="exp" placeholder="¿cual es tu experiencia laboral?">
                    </label>
            
            <br>
            <button type="reset">Borrar todo</button>
            <button type="submit">Enviar</button>

      </form>
  </div>

</body>
</html>