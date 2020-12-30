<?php

	$servername = "localhost";
	$username = "Felipe-Torres";
	$password = "4815162342";
	$DBname = "falls_cars";
	
	$conn = new PDO("mysql:host=" . $servername . ";dbname=" . $DBname,$username,$password);
	
	$vcidade = $_POST['cidade'];
	
	$sql = $conn->prepare("SELECT * FROM lojas WHERE cidade = '" . $vcidade . "'");
	
	$sql->execute();
	
	$fetchAll = $sql->fetchAll();
	
	foreach($fetchAll as $vlojas) {
		echo '<option value="' . $vlojas['endereco'] . '"></option>';
	}
?>