<?php

	$servername = "localhost";
	$username = "Felipe-Torres";
	$password = "4815162342";
	$DBname = "falls_cars";
	
	$conn = new PDO("mysql:host=" . $servername . ";dbname=" . $DBname,$username,$password);
	
	$vestado = $_POST['estado'];
	
	$sql = $conn->prepare("SELECT * FROM cidadescomloja WHERE estado = '" . $vestado . "'");
	
	$sql->execute();
	
	$fetchAll = $sql->fetchAll();
	
	foreach($fetchAll as $cidade) {
		echo '<option value="' . $cidade['cidade'] . '"></option>';
	}

?>