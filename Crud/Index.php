<!DOCTYPE html>
<html>
<body>

<head>	<h1>________Sistema de Gerenciamento de Alunos da Faeterj-rio____________________________</h1></head>
<div>
		<br>
		<h2>Incluir_Aluno</h2>
		<br>
		 <form action="incluir.php" method="post">
			<p>Matrícula:</p>
				<input type="text" name="matricula">
			<p>Nome:</p>
				<input type="text" name="nome">
			<p>CPF:</p>
				<input type="text" name="cpf">
			<p>Data de Nascimento:</p>
				<input type="text" name="datanasc">
			<br>
				<input type="submit"  value="Incluir_Aluno">
			
			</form>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
	<form action="Excluir.php"  method="post">
		<h2> Excluir_Aluno</h2>
		<p>Digite a matricula do aluno a ser exclúido</p>
			<input type="text" name="matricula">
		<br>
			<input type="submit"  value="Excluir_Aluno">
	</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
	<h2> Alterar_Aluno</h2>
	<form action="Alterar.php" method="post">
			<p>Matrícula:</p>
				<input type="text" name="matricula">
			<p>Nome:</p>
				<input type="text" name="nome">
			<p>CPF:</p>
				<input type="text" name="cpf">
			<p>Data de Nascimento:</p>
				<input type="text" name="datanasc">
			<br>
				<input type="submit"  value="Alterar">
		</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
	<h2> Buscar_um_Aluno</h2>
	<p>Digite a matricula do aluno</p>
	<form action="Buscar_1.php" method="post">
			<input type="text" name="matricula">
		<br>
			<input type="submit"  value="Buscar">
	</form>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
	<h2> Listar_Alunos</h2>
	<br>
	<form action="Buscar_Todos.php" method="post">
		<input type="submit"  value="Listar">
	</form>
</div>


	
	
s
</body>
</html>