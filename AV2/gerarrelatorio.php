<?php

	$servername = "localhost";
	$username = "Felipe-Torres";
	$password = "4815162342";
	$DBname = "falls_cars";
	
	$conn = new PDO("mysql:host=" . $servername . ";dbname=" . $DBname,$username,$password);
	
	$sql = $conn->prepare("SELECT * FROM locacoes;");
	
	$sql->execute();
	
	$fetchAll = $sql->fetchAll();
	
	foreach($fetchAll as $locacoes) {
		echo "Código da Locação: " . $locacoes['codv'] . 
		"<br>Codigo do carro alugado: " . $locacoes['codcarro'] . 
		"<br>Codigo da loja: " . $locacoes['codloja'] . 
		"<br>Data da reserva: " . $locacoes['datareserva'] . 
		"<br>Tempo de reserva: " . $locacoes['tempo'] .  
		"<br>Status :" . $locacoes['status'] . 
		"<br>CPF do Cliente:" . $locacoes['cpf'] . "<br><br>";
	}

?>