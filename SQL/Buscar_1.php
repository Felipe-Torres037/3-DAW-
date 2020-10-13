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
		echo "Conectado ao servidor!<br><br>";

		$matricula= $_POST["matricula"];

		$sql = "SELECT * FROM alunos WHERE matricula = '" . $matricula . "';";
					
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "Matricula: " . $row["MAtricula"] . "<br>Nome: " . $row["Nome"] . "<br>CPF: " . $row["CPF"] . "<br>Data de Nascimento: " . $row["Data_Nasc"] . "<br><br>";
			}
		} else {
			echo "<p>Erro ao exibir o aluno pedido: " . $conn->error . "</p>";
		}

		?>

	<button onclick="document.location='index.php'">Voltar ao menu</button>

	</body>
</html>