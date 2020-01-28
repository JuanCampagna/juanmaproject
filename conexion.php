<?php
	$dbconn3 = pg_connect("host=localhost port=5432 dbname=juanma user=postgres password=asdasd123");

	if ($dbconn3) {
		echo "Conectó bien 😁👍";
	}else{
		echo "No se conectó a la db de postgres 😭";
	}
?>