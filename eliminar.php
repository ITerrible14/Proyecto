<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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

#menu  li {
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
    color:#333;

}

#menu li a:active { /*Cuando da click en el mouse */
    filter:brightness(75%);
    font-size: 120%;
}

#menu li:last-child{
float: right;
color:white;
}

* {
    box-sizing: border-box; /*define cómo se calculan el ancho y la altura de un elemento*/
}

input[type=text],input[type="email"], select, textarea {
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
legend{
  font-family: Georgia, serif;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

#seccion {
float: left;
width: 800px;
margin: 20px;
}

#columna {
float: right;
width: 400px;
height: auto;
margin: 20px 0px;
padding: 20px;
border: 1px solid rgb(250, 72, 2);
}
.ra{width: 30%;
  height: 35%;


}
figcaption {
font: italic 14px verdana, sans-serif;
}




</style>
</head>

<body>


<nav id="menu">
    <ul>

    <li> <a href="eliminar.php" target="" >Eliminar </a></li>
    <li><a href="mostrar.php" target="" >Consultar </a> </li>

    <li><a href="index.php" target="" >Regresar al inicio </a></li>

    </ul>
  </nav>

<?php 
$mysql = new mysqli("localhost", "root", "", "proyecto");
$Query = "SELECT * FROM usuarios";
$Result = $mysql->query( $Query );


	 $numeroRegistros=$Result->num_rows;   
	 if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron registros</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
<table border=1 >
        <tr>
		<td><strong> ID</strong></td>
		<td><strong> Nombre de usuario</strong></td>
		<td><strong> Contraseña</strong></td>
		<td><strong> Administrador</strong></td>
        <td><strong>fecha</strong></td>
		</tr>
		<?php
        
        while($row =$Result->fetch_array()) {
            if($row['admin']=="true"){
                continue;  }
	   
			$var=$row["id"]; 
           ?>
		   <tr>
           <td> <?php printf($row["id"]); ?>   </td>
		   <td> <?php printf($row["username"]); ?>   </td>
		  
		   <td> <?php printf($row["password"]); ?>   </td>
		  
		   <td> <?php printf($row["admin"]); ?>   </td>
		   <td> <?php printf($row["fecha"]); ?>   </td>
		   <td><a onclick="comprobar();" href="eliminacion.php?id=<?php print($var); ?>"><img src="img/eliminar.png" alt="Eliminar" style="width: 20px; height: 20px;" /></a></td>
			</td>
           </tr>
<?php	}
}
?>
</table>

<br><br>

</body>
<script type="text/javascrip">
    function comprobar(){
        var d=confirm("¿seguro que quieres borrar?");
        if(d){}else{
            event.preventDefault();

        }
    }
    </script>
</html>
