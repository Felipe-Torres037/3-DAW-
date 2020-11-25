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
		<h2>Listar Alunos</h2>
		<form action="T2Lista.php" method="post">
			
			<p>Disciplina:</p>
			<input list="disciplina" name="disciplina">
			<datalist id="disciplina">
			<?php
			
				$servername = "localhost";
				$username = "Felipe-Torres";
				$password = "4815162342";
				$DBname = "cenario 01";
				
				$conn = new mysqli($servername, $username, $password, $DBname);
				
				$sql = "SELECT * FROM `disciplina`;";
				
				$result = $conn->query($sql);
				
				while($row = $result->fetch_assoc()) {
					echo "<option value='" . $row["Nome"] . "'>";
				}
				
			?>
			</datalist><br>
			
			<p>Turma:</p>
			<input list="turma" name="turma">
			<datalist id="turma">
			<?php
			
				$sql = "SELECT * FROM `Turma`;";
				
				$result = $conn->query($sql);
				
				while($row = $result->fetch_assoc()) {
					echo "<option value='" . $row["Cod-Turma"] . "'>";
				}
				
			?>
			</datalist><br>
			
			<br>
			<input type="submit" class="button">
			
		</form>
	</body>
</html>