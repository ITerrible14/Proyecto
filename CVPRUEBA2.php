<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum Vitae</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .name {
            font-size: 36px;
            color: #333;
            margin: 0;
            text-transform: uppercase;
        }
        .job-title {
            font-size: 20px;
            color: #666;
            margin: 5px 0;
        }
        .contact-info p {
            margin: 10px 0;
            font-size: 18px;
            color: #444;
        }
        .section {
            margin-bottom: 30px;
        }
        .section h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-transform: uppercase;
        }
        .section ul li {
            margin-bottom: 15px;
        }
        .section ul li span {
            font-weight: bold;
            display: inline-block;
            width: 150px;
            color: #555;
        }
        .section ul li p {
            margin: 0;
            font-size: 18px;
            color: #444;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            color: #666;
        }
        .skill-bar {
            margin-bottom: 20px;
        }
        .skill-bar span {
            display: block;
            height: 20px;
            background: #3498db;
            border-radius: 5px;
        }
        .skill-bar .skill {
            width: 90%;
            animation: fill 2s ease-in-out;
        }
        .header img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }
        @keyframes fill {
            from { width: 0; }
        }
        .button-container {

flex-direction: column;

margin-top: 20px;
}
.button-container button {
margin-bottom: 10px;
padding: 10px 20px;
background-color: #00796b;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}
.button-container button:hover {
background-color: #004d40;
}
    </style>
    <style>
        .profile-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .profile-button {
            position: relative;
            display: inline-block;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            width: 150px;
            height: 150px;
        }
        
        .profile-button img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 16px;
            border-radius: 50%;
            transition: opacity 0.3s ease;
        }

        .overlay.hidden {
            opacity: 0;
        }
        </style>
</head>
<body>

    <div class="container" id="container">
        <div class="header">
            <h1 class="name"><?php
                session_start();
                $mysql = new mysqli("localhost","root","","proyecto");
    
                if ($mysql->connect_error) {
                    die("Conexión fallida: " . $mysql->connect_error);
                }
    
                $Query = "SELECT nombre,apellido,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
                $result = $mysql->query($Query);
    
                if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  if($row['usuarios_id']==$_SESSION['usuario_id']){
                    echo "".$row['nombre']." ".$row['apellido'];
                  }
    
                }
    
                $mysql->close();
                ?></h1>
            <p class="job-title"> 
            <div class="profile-container">
        <input type="file" id="upload" accept="image/*" style="display: none;" />
        <label for="upload" class="profile-button">
            <img src="ruta-a-tu-imagen.jpg" alt="" id="profile-image">
            <div class="overlay" id="overlay">
                <span>Subir foto</span>
            </div>
        </label>
    </div>
        </div>
        <div class="contact-info">
            <p>Email:  <?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT correo,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['correo'];
              }

            }

            $mysql->close();
            ?></p>
            <p>Teléfono:<?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT telefono,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['telefono'];
              }

            }

            $mysql->close();
            ?> </p>

        </div>
        <div class="section">
            <h2>Sobre mi</h2>
            <ul>
                
                <?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT ti,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['ti'];
              }

            }

            $mysql->close();
            ?>
                </li>
            </ul>
        </div>
        <div class="section">
            <h2>Educación</h2>
           
                    Universidad: <?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT universidad,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['universidad'];
              }

            }

            $mysql->close();
            ?>
<p> <?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT grado,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['grado'];
              }

            }

            $mysql->close();
            ?> en
             <?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT licenciatura,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['licenciatura'];
              }

            }

            $mysql->close();
            ?>
        </div>
        <div class="section">
            <h2>Experiencia</h2>
            <div class="skill-bar">
                <span class="skill" style="width: 90%;"> <?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT exp,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['exp'];
              }

            }

            $mysql->close();
            ?></span>
            </div>
            
        <div class="footer">
            <p>&copy; 2024 Nombre Apellido. Todos los derechos reservados.</p>
        </div>
    </div>

    </div>
    <div class="button-container">
        <center>
            <button id="downloadPDF">Descargar como PDF</button>
            <button onclick="location.href='Menu.php'">Regresar</button>
            <button onclick="location.href='index.php'">Cerrar sesión</button>
            <button id="sendEmail">Enviar por Correo</button>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
    document.getElementById('downloadPDF').addEventListener('click', function () {
        // Usa html2canvas para capturar el div como una imagen
        html2canvas(document.getElementById('container')).then(canvas => {
            const imgData = canvas.toDataURL('image/png');
            const { jsPDF } = window.jspdf;
            
            // Obtén el tamaño del canvas
            const imgWidth = canvas.width;
            const imgHeight = canvas.height;
            
            // Define las dimensiones del PDF (en este caso, A4)
            const pdfWidth = 207; // Ancho en mm para A4
            const pdfHeight = 294; // Alto en mm para A4
            
            // Crea un nuevo PDF en orientación vertical
            const doc = new jsPDF('portrait', 'mm', 'a4');

            // Calcula las dimensiones de la imagen para que se ajuste al PDF
            const ratio = Math.min(pdfWidth / imgWidth, pdfHeight / imgHeight);
            const width = imgWidth * ratio;
            const height = imgHeight * ratio;

            // Agrega la imagen al PDF
            doc.addImage(imgData, 'PNG', 1.5, 1.5, width, height);
            
            // Descarga el PDF
            doc.save('contenido.pdf');
        });
    });
</script>
<script>
        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('img');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    
    <script>
        document.getElementById('upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profile-image').src = e.target.result;
                    document.getElementById('overlay').classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
