<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "Felipe-Torres";
$password = "4815162342";
$DBname = "banco_dados_alunos";
// Criar conexão com o banco
$conn = new mysqli($servername, $username, $password, $DBname);
// Testar conexão
if ($conn->connect_error) {
  die("Falha da conexão: " . $conn->connect_error);
}
echo "Conectado ao servidor!";
//Recebendo valores
	$matricula= $_POST["matricula"];
	$nome= $_POST["nome"];
	$cpf= $_POST["cpf"];
	$datanasc= $_POST["datanasc"];
	
// Atribuindo valores a tabela
	$sql = "INSERT INTO alunos (matricula , nome, cpf, data_nasc)
	VALUES ('" . $matricula . "', '" . $nome . "', '" . $cpf . "', '" . $datanasc . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "<p>Aluno inserido com sucesso</p>";
	} else {
		echo "<p>Erro ao inserir o aluno: " . $conn->error . "</p>";
	}
?>
<button onclick="document.location='index.php'">Voltar ao menu</button>
</body>
</html>
