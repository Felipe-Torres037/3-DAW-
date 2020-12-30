<?php

	$servername = "localhost";
	$username = "Felipe-Torres";
	$password = "4815162342";
	$DBname = "falls_cars";
	
	$conn = new PDO("mysql:host=" . $servername . ";dbname=" . $DBname,$username,$password);
	
	$vestado = $_POST['estado'];
	$vcidade = $_POST['cidade'];
	$vdata = $_POST['data'];
	$vtempo = $_POST['tempo'];
	$vstatus = $_POST['status'];
	$vendereco = $_POST['endereco'];
	$vnumcc = $_POST['numcc'];
	$vnomecc = $_POST['nomecc'];
	$vval = $_POST['valcc'];
	$vcodigoseg = $_POST['codseg'];
	$vcpf = $_POST['cpf'];
	
	$sql = $conn->prepare("Select * from lojas where endereco = '" . $vendereco . "'");
	
	$sql->execute();
    
	
	$fetchAll = $sql->fetchAll();
	
	foreach($fetchAll as $codloja) { $vcodloja = $codloja['codloja'];}
	
	$sql = $conn->prepare("Select * from carros where modelo = '" . $vstatus . "' and status = 'disponivel'");
	
	$sql->execute();
    
	
	$fetchAll = $sql->fetchAll();
	
	$cont=0;
	
	foreach($fetchAll as $cdcarro) 
	{ 
		if($cont==0)
		{
			$vcodcarro = $cdcarro['codcarro'];
			$cont++; 
		}
		
		}

		
	
	
$teste = "INSERT INTO locacoes (codcarro, codloja, endereco, datareserva, tempo, status, cfp, numcc, valcc, codseg, nomecc)
VALUES ('" . $vcodcarro . "','" . $vcodloja . "','" . $vendereco . "','" . $vdata . "','" . $vtempo . "','reservado','" . $vcpf . "','" . $vnumcc . "','" . $vval . "','" . $vcodigoseg . "','" . $vnomecc . "');";



$sql = $conn->prepare($teste);

$sql->execute();

	$sql = $conn->prepare("UPDATE carros SET status = 'reservado' WHERE codcarro = '" . $vcodcarro . "';");
	
	$sql->execute();
	
	echo "Carro reservado ";

?>