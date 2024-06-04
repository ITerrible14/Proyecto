<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mi Currículum</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Estilos generales */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 800px;
  margin: 50px auto;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

.header h1 {
  margin: 0;
}

.content {
  display: flex;
}

.left-column {
  flex: 1;
  padding: 20px;
}

.right-column {
  flex: 2;
  padding: 20px;
}

.profile img {
  width: 150px;

  margin-bottom: 10px;
}

.profile h2, .profile p {
  margin: 5px 0;
}

.contact h3 {
  margin-top: 20px;
}

.about h3, .education h3, .experience h3 {
  margin-top: 20px;
}

.footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0;
}

.footer p {
  margin: 0;
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
    <h1>Mi Currículum</h1>
  </div>
  <div class="content">
    <div class="left-column">
      <div class="profile">
        
<div class="profile-container">
        <input type="file" id="upload" accept="image/*" style="display: none;" />
        <label for="upload" class="profile-button">
            <img src="ruta-a-tu-imagen.jpg" alt="" id="profile-image">
            <div class="overlay" id="overlay">
                <span>Subir foto</span>
            </div>
        </label>
    </div>
        <h2>
        <?php
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
            ?>
        </h2>
        <h4>
        <?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT edad,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['edad'];
              }

            }

            $mysql->close();
            ?>
        </h4>
        <h4>Sexo</h4>
        <?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT sexo,usuarios_id FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['sexo'];
              }

            }

            $mysql->close();
            ?>
      </div>
      <div class="contact">
        <h3>Contacto</h3>
        <p>Correo: 
          <?php
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
        <p>Teléfono:<br><?php
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
    </div>
    <div class="right-column">
      <div class="about">
        <h3>Habilidades</h3>
        <p><?php
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
            ?> </p>
      </div>
      <div class="education">
        <h3>Educación</h3>
      <h4>Universidad</h4>
      <?php
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
            <br>
            <h4>Licenciatura</h4>
            
      <?php
            $mysql = new mysqli("localhost","root","","proyecto");

            if ($mysql->connect_error) {
                die("Conexión fallida: " . $mysql->connect_error);
            }

            $Query = "SELECT * FROM datos WHERE usuarios_id ='".$_SESSION['usuario_id']."'";
            $result = $mysql->query($Query);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              if($row['usuarios_id']==$_SESSION['usuario_id']){
                echo "".$row['licenciatura'];
              }

            }

            $mysql->close();
            ?> 
      <h5>Ultimo grado</h5>
       <?php
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
            ?> 
      </div>
      <div class="experience">
        <h3>Experiencia Laboral</h3>
        <p><?php
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
            ?> </p>
      </div>
    </div>
  </div>
  <div class="footer">
    <p>© 2024 Mi Currículum</p>
  </div>
</div>
<div class="button-container">
        <center>
            <button id="downloadPDF">Descargar como PDF</button>
            <button onclick="location.href='Menu.php'">Regresar</button>
            <button onclick="location.href='index.php'">Cerrar sesión</button>
            <button id="sendEmail">Enviar por Correo</button>
        </div>
<script>
document.getElementById('sendEmail').addEventListener('click', function () {
    html2canvas(document.getElementById('container')).then(canvas => {
        canvas.toBlob(function(blob) {
            const formData = new FormData();
            formData.append('pdf', blob, 'contenido.pdf');

            fetch('send_email.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text())
            .then(result => {
                console.log(result);
            }).catch(error => {
                console.error('Error:', error);
            });
        }, 'application/pdf');
    });
});
</script>

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
            const pdfWidth = 292; // Ancho en mm para A4
            const pdfHeight = 250; // Alto en mm para A4
            
            // Crea un nuevo PDF en orientación vertical
            const doc = new jsPDF('landscape', 'mm', 'a4');

            // Calcula las dimensiones de la imagen para que se ajuste al PDF
            const ratio = Math.min(pdfWidth / imgWidth, pdfHeight / imgHeight);
            const width = imgWidth * ratio;
            const height = imgHeight * ratio;

            // Agrega la imagen al PDF
            doc.addImage(imgData, 'PNG', 2.5, 10, width, height);
            
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


        const pdfBlob = doc.output('blob');
            
            const formData = new FormData();
            formData.append('pdf', pdfBlob, 'contenido.pdf');
            
            fetch('upload.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text())
            .then(result => {
                console.log(result);
            }).catch(error => {
                console.error('Error:', error);
            });
    </script>

</body>
</html>
