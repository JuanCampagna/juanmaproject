<?php
include("./../conexion.php");

$query="SELECT * FROM juanma.test_csv
		WHERE cognome LIKE '%".$_REQUEST['cognome']."%'
		AND nome LIKE '%".$_REQUEST['nome']."%';";

$result = pg_query($db,$query);

while ($row = pg_fetch_row($result)) {
	// echo pg_affected_rows($result);
	if (pg_affected_rows($result) == 1) {
		echo $row[0].",".
			 $row[1].",".
			 $row[2].",".
			 $row[3].",".
			 $row[4].",".
			 $row[5].",".
			 $row[6].",".
			 $row[7].",".
			 $row[8].",".
			 $row[9].",".
			 $row[10].",".
			 $row[11].",".
			 $row[12].",".
			 $row[13].",".
			 $row[14].",".
			 $row[15].",".
			 $row[16].",".
			 $row[17];
	}else{
		echo (pg_affected_rows($result));
	}
};

?>