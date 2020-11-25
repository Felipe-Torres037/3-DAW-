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
		<h2>Menu de Matrícula</h2>
		<form action="T1-MAT.php" method="post">
			
			<p>Disciplina:</p>
			<input list="disciplinas" name="disciplina">
			<datalist id="disciplinas">
			<?php
			$servername = "localhost";
			$username = "Felipe-Torres";
			$password = "4815162342";
			$DBname = "cenario 01";
				
				$conn = new mysqli($servername, $username, $password, $DBname);
				
				$sql = "SELECT * FROM disciplina;";
				
				$result = $conn->query($sql);
				
				while($row = $result->fetch_assoc()) {
					echo "<option value='" . $row["Nome"] . "'>";
				}
				
			?>
			</datalist>
			
			<p>Turma:</p>
			<input list="turmas" name="turma">
			<datalist id="turmas">
			<?php
			
				$sql = "SELECT * FROM turma;";
				
				$result = $conn->query($sql);
				
				while($row = $result->fetch_assoc()) {
					echo "<option value='" . $row["Cod-Turma"] . "'>";
				}
				
			?>
			</datalist>
			
			<p>Aluno:</p>
			<input list="alunos" name="aluno">
			<datalist id="alunos">
			<?php
			
				$sql = "SELECT * FROM alunos01;";
				
				$result = $conn->query($sql);
				
				while($row = $result->fetch_assoc()) {
					echo "<option value='" . $row["Nome"] . "'>";
				}
				
			?>
			</datalist><br>
			
			<br>
			<input type="submit" class="button">
		</form>
	</body>
</html>