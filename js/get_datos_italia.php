<?php
include("./../conexion.php");

$query="SELECT * FROM test_csv
		WHERE cognome LIKE '%".$_REQUEST['cognome']."%'
		AND nome LIKE '%".$_REQUEST['nome']."%';";

$resultado = pg_query($db,$query);
// $row = pg_fetch_array($resultado);

while ($resultado = pg_fetch_row($resultado)) {
	echo $resultado;
}

?>