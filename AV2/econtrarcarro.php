<?php

	$servername = "localhost";
	$username = "Felipe-Torres";
	$password = "4815162342";
	$DBname = "falls_cars";
	
	$conn = new PDO("mysql:host=" . $servername . ";dbname=" . $DBname,$username,$password);
	
	$vcidade = $_POST['cidade']; 
	
	$sql = $conn->prepare("SELECT * FROM carros WHERE cidade = '" . $vcidade . "' AND status = 'disponivel'");
	
	$sql->execute();
	
	$fetchAll = $sql->fetchAll();
	
	foreach($fetchAll as $vauto) {
		echo '<option value="' . $vauto['modelo'] . '"></option>';
	}

?>