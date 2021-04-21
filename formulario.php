<?php
   include "conexion.inc.php";  	
?>

<form method="GET" action="https://localhost:44355/WebForm1.aspx">
    Nombre<input type="Text" name="nombre"/>
	Apellido<input type="Text" name="apellido"/>
	CI<input type="Text" name="ci"/>
	<?php
     	echo "la fecha actual es ".date("d")."del".date("m")."de".date("Y");
		String fecha =date("d")."del".date("m")."de".date("Y");
        $sql ="insert into fecha values(fecha) ";
  
        $resultado = mysqli_query($conn, $sql);
    ?>
	<input type="submit" name="Enviar"/>
</form>
	