<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Document</title>


  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap" rel="stylesheet">
  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Baloo 2', cursive;
}

body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: #efefef;
    flex-wrap: wrap;
}

.card{
    position: relative;
    width: 300px;
    height: 400px;
    background: #fff;
    border-radius: 5px;
    overflow: hidden;
    transition: .5s;
    margin: 15px 20px;
}
.card:hover{
    box-shadow: 0 5px 15px rgba(3,89,92,.5);
    transform: translateY(-15px);
}

.card .head{
    height: 170px;
    width: 100%;
    position: relative;
}

.card .head .circle{
    position: absolute;
        width: 300px;
        height: 300px;

        background: #0b6f72;
        bottom: 0;
}

.card .head .img{
    position: absolute;
    background: #fff;
    padding: 5px;

    bottom: -30%;
    left: 50%;
    transform: translate(-50%);
}

.card .head .img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card .description{
    height: 180px;
    padding: 150px 20px 20px 20px;
    border-bottom: solid 1px rgba(6, 74, 76, 18);
    text-align: center;
}

.card .description h3{
    color: #05383a;
}

.card .description h4{
    color: #1c5a5c;
}
.card .description p{
    margin-top: 20px;
    font-size: 15px;
}

.card .contact{
    width: 100%;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card .contact a{
    text-decoration: none;
    color: #fff;
    background: #157579;
    padding: 5px 20px;
    border-radius: 5px;
    transition: .3s;

}

.card .contact a:hover{
    background: #0b6164;

}



.zoom-image {
    width: 100%;
    transition: transform 0.5s ease;
}

.zoom-image:hover {
    transform: scale(2); /* Ajusta la escala según tus preferencias */
}
header {
      width: 100%;
      background-color: #0b6f72;
      color: white;
      padding: 15px 0;
      font-size: 24px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: left; 
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
    }
    
    header a{
      text-decoration: none;
      margin-left: 20px; 
    }
</style>
</head>


<body>
<header>
    <?php session_start();  echo "".$_SESSION['username'];?>
    <a href="index.php">Cerrar sesion</a>
  </header>
  <div class="card">
    <div class="head">
      <div class="circle"></div>
      <div class="img">
        <img src="img/cv1.JPG" alt=""  class="zoom-image"/>
      </div>
    </div>

    <div class="description">
      <h3>Formulario 1</h3>
      
      <p>
        
      </p>
    </div>

    <div class="contact">
        <a href="CVPRUEBA.php">
        Confirmar</a> 
    </div>

  </div>

  <div class="card">
    <div class="head">
      <div class="circle"></div>
      <div class="img">
        <img src="img/cv2.png" alt="" class="zoom-image"/>
      </div>
    </div>

    <div class="description">
      <h3>Formulario 2</h3>
      
      <p>
        
      </p>
    </div>

    <div class="contact">
      <a href="CVPRUEBA2.php">Confirmar</a>
    </div>

  </div>

  <div class="card">
    <div class="head">
      <div class="circle"></div>
      <div class="img">
        <img src="img/cv3.png" alt="" class="zoom-image"/>
      </div>
    </div>

    <div class="description">
      <h3>Forulario 3</h3>
      
      <p>
        
      </p>
    </div>

    <div class="contact">
      <a href="CVPRUEBA3.php">Confirmar</a>
    </div>

  </div>

  <div class="card">
    <div class="head">
      <div class="circle"></div>
      <div class="img">
        <img src="img/cv4.jpg" alt="" class="zoom-image"/>
      </div>
    </div>

    <div class="description">
      <h3>Formulario 4</h3>
      
      <p>
        
      </p>
    </div>

    <div class="contact">
      <a href="CVPRUEBA4.php">Confirmar</a>
    </div>

  </div>



</body>
</html>