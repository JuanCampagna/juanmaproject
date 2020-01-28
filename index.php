<?php 
	include("conexion.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pepe</title>
</head>
<body>
	<h1>SUPER DUPER TITULO</h1>
	<button>Botón</button>
	<p>este es el primer titulo</p>

	<select class="mongo">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>

	<input type="text" name="">

	<?php 
		$query = "SELECT * FROM musica.albumes";
		$resultado = pg_query($db,$query);

		while ($filas=pg_fetch_array($resultado)) {
			echo $filas["album"];
			echo $filas["ano"];	
			echo $filas["id_album"];
		}
		
	?>
</body>
</html>