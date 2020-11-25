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
			
			$servername = "localhost";
			$username = "Felipe-Torres";
			$password = "4815162342";
			$DBname = "cenario 01";
			$conn = new mysqli($servername, $username, $password, $DBname);
			
			$disciplina = $_POST["disciplina"];
			$turma = $_POST["turma"];
			$aluno = $_POST["aluno"];
			
			$sql = "SELECT * FROM alunos01 WHERE Nome = '" . $aluno . "';";
			
			$result = $conn->query($sql);
			
			$row = $result->fetch_assoc();
			
			$MAT = $row["Matricula"];
			
			
			$sql = "SELECT * FROM disciplina WHERE Nome = '" . $disciplina . "';";
			
			$result = $conn->query($sql);
			
			$row = $result->fetch_assoc();
			
			$CODD = $row["Codigo"];
			
			$sql = "INSERT INTO matriculas (MAT_Aluno, Codigo_Mat, Turma)
			VALUES ('" . $MAT . "', '" . $CODD . "', '" . $turma . "')";
			
			if ($conn->query($sql) === TRUE) {
				echo "<p>Inserido com sucesso!</p>";
			}
			else {
				echo "<p>Não foi possível inserir. Erro: " . $conn->error . "</p>";
			}
			
		?>
		
		<button onclick="document.location='cenario_01.php'" class="button">Home</button>
		
	</body>
</html>