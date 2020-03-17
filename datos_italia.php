<?php include("conexion.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Datos traidos de una base</title>
	<meta charset="utf-8">
</head>
<body>
	<section>
		<div>
			<div class="head">
				<h2>Búsqueda en base de datos Postgres</h2>
			</div>
			<div>
				<label>Cognome</label><br>
				<input type="text" name="cognome" id="cognome"><br>
				<label>Nome</label><br>
				<input type="text" name="nome" id="nome"><br>
				<label>Data di Nascita</label><br>
				<input type="text" name="" id="data_di_nascita"><br>
				<label>Localita</label><br>
				<input type="text" name="" id="localita"><br>
				<label>Nazione</label><br>
				<input type="text" name="" id="nazione"><br>
				<label>Cittadinanza</label><br>
				<input type="text" name="" id="cittadinanza"><br>
				<label>Numero Tessera</label><br>
				<input type="text" name="" id="numero_tessera"><br>
				<label>Anno Iscrizione Circolo</label><br>
				<input type="text" name="" id="anno_iscrizione_circolo"><br>
				<label>Tipo Socio</label><br>
				<input type="text" name="" id="tipo_socio"><br>
				<label>Indirizzo</label><br>
				<input type="text" name="" id="indirizzo"><br>
				<label>Cap</label><br>
				<input type="text" name="" id="cap"><br>
				<label>Citta</label><br>
				<input type="text" name="" id="citta"><br>
				<label>Professione</label><br>
				<input type="text" name="" id="professione"><br>
				<label>Stato</label><br>
				<input type="text" name="" id="stato"><br>
				<label>Email</label><br>
				<input type="text" name="" id="email"><br>
				<label>Telefono</label><br>
				<input type="text" name="" id="telefono"><br>
				<label>Firma</label><br>
				<input type="text" name="" id="firma"><br>
				<label>ID</label><br>
				<input type="text" name="" id="id"><br>
				<br>
				<button type="button" id="buscar">Buscar</button>
			</div>
		</div>
	</section>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="./js/funciones.js"></script>
</html>