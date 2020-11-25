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
			
			echo "<h2>Alunos Aptos</h2>";
			
			$servername = "localhost";
			$username = "Felipe-Torres";
			$password = "4815162342";
			$DBname = "cenario 01";
			
			$conn = new mysqli($servername, $username, $password, $DBname);
			
			$disciplina = $_POST["disciplina"];
			$turma = $_POST["turma"];
			
			$sql = "SELECT * FROM disciplina WHERE Nome = '" . $disciplina . "';";
			
			$result = $conn->query($sql);
			
			$row = $result->fetch_assoc();
			
			$prereq = $row["Pre-Req"];
			
			$discatual = "Disp" . $row["Codigo"];
			
			if ($prereq != "") {
				
				echo "<p>A disciplina tem pré-requisito.</p>";
				
				$prereq = "Disp" . $row["Pre-Req"];
				
				$sql = "SELECT * FROM alunos WHERE " . $prereq . " = 'aprovado'
				AND (" . $discatual . " = 'não matriculado' OR " . $discatual . " = 'reprovado');";
				
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "Matricula: " . $row["Matricula"] . "<br>Nome: " . $row["Nome"] . "<br>";
						echo "<form action='T2Mat.php' method='post'>";
						echo "<input type='hidden' value='" . $row["Matricula"] . "' name = 'matricula'>";
						echo "<input type='hidden' value='" . $discatual . "' name = 'discatual'>";
						echo "<input type='submit' value='Matricular' class='button'><br><br>";
						echo "</form>";
					}
				} else {
					echo "<p>Não foram encontrados alunos aptos.</p>";
				}
				
			}
			else {
				
				echo "<p>A disciplina não tem pré-requisitos.</p>";
				
				$sql = "SELECT * FROM alunos01 WHERE " . $discatual . " = 'NAO-MAT' OR " . $discatual . " = 'REPROVAD';";
				
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "Matricula: " . $row["Matricula"] . "<br>Nome: " . $row["Nome"] . "<br><br>";
						echo "<form action='T2Mat.php' method='post'>";
						echo "<input type='hidden' value='" . $row["Matricula"] . "' name = 'matricula'>";
						echo "<input type='hidden' value='" . $discatual . "' name = 'discatual'>";
						echo "<input type='submit' value='Matricular' class='button'><br><br>";
						echo "</form>";
					}
				} else {
					echo "<p>Não foram encontrados alunos aptos.</p>";
				}
				
			}
			
		?>
		
		<button onclick="document.location='T2.php'" class="button">Home</button>
		
	</body>
</html>