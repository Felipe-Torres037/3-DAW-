<html>
	<head>
		<style>
			.button {
				width: 100px;
				height: 30px;
				text-align: center;
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		
		<?php
			
			echo "<h2>Matricular Aluno</h2>";
			
			$servername = "localhost";
			$username = "Felipe-Torres";
			$password = "4815162342";
			$DBname = "cenario 01";
			
			$conn = new mysqli($servername, $username, $password, $DBname);
			
			$matricula = $_POST["matricula"];
			$discatual = $_POST["discatual"];
			
			$sql = "UPDATE alunos01
			SET " . $discatual . " = 'cursando'
			WHERE matricula = '" . $matricula . "'";
			
			if ($conn->query($sql) === TRUE) {
				echo "<p>Aluno matriculado com sucesso!</p>";
			} else {
				echo "<p>Erro ao matricular aluno: " . $conn->error . "</p>";
			}
			
		?>
		
		<button onclick="document.location='T2.php'" class="button">Home</button>
		
	</body>
</html>