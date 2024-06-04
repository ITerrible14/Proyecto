<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" href="style.css" title="Color">
<link rel="stylesheet" href="styler.css" title="Color">
</head>
<style type="text/css">

    tr:hover {
td{
    	background-color: #DAF7A6;color: black;}}
    #Luis{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 30px;
    resize: vertical;
    }
    th,td{ border-radius: 4px;}
</style>
<body>
<body>
     <nav id="menu">
    <ul>
    <li><a href="insertar.php" target="" >Insertar </a></li>
    <li> <a href="eliminar.php" target="" >Eliminar </a></li>
    <li><a href="mostrar.php" target="" >Consultar </a> </li>
    <li><a href="actualizar.php" target="" >Actualizar </a></li>
    <li><a href="index.php" target="" >Regresar al inicio </a></li>

    </ul>
  </nav>
<div>



<?php 
// $conexion = pg_connect("host=localhost port=5432 user=nombreUsuario password=passwordUsuario dbname=nomBD", PGSQL_CONNECT_FORCE_NEW);
// $conexion = pg_connect("host=localhost dbname=BASE_DE_DATOS user=USUARIO password=CONTRASEÑA");		

$mysql = new mysqli("localhost", "root", "", "proyecto");

$Query = "select * from usuarios";
$Result = $mysql->query( $Query );


	 $numeroRegistros=$Result->num_rows;   
	 if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron registros</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
 
   <table border bordercolor="yellow" id="Luis"> 
   <tr>
		   <th>
           <label><strong> Id</strong></label></th>
		<label><strong> Nombre</strong></label></th>
		<th><label><strong> Apellidos</strong></label></th>
		<th><label><strong> Edad</strong></label></th>
		<th><label><strong> Sexo		</strong> </label></th></tr>
        <th><label><strong> Correo</strong></label></th>
		<th><label><strong> Universidad</strong></label></th>
		<th><label><strong> Carrera	</strong> </label></th></tr>
        <th><label><strong> Grado	</strong> </label></th></tr>
        <label><strong> Fecha</strong></label></th>
		<br>
		<?php
        while($row =$Result->fetch_array()) {	  
		$nom=$row["nombre"];
           ?>
		   <tr>

                        <td><?php echo $nom; ?> </a></td>
                        <td><?php echo $row["direccion"]; ?></td>
                        <td><?php echo $row["telefono"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><a onclick="return confirm('¿Seguro que quieres eliminar este registro?');" href="eliminacion.php?Nombre=<?php echo $nom; ?>"><img src="img/eliminar.png" alt="Eliminar" style="width: 20px; height: 20px;" /></a></td>
          
           </tr>
<?php	}
}
?>
</table>
</div>
</article>
</section>

</body>
<script type="text/javascript">
	function comprobar() {
		
		var d=confirm("¿Seguro quieres borra ese registro?");
	if (d) {}else{event.preventDefault();
	}
		// body...
	}
	
</script>
</html>
