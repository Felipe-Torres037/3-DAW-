
		<?php
	
		$arq = fopen("Dados.txt", "w") or die("Erro ao abrir o arquivo!");
	
		$linha = $_POST["matricula"] . "; " . $_POST["nome"] . "; " . $_POST["endereco"] . "; " . $_POST["cep"] . "; " . $_POST["cidade"] . "; " . $_POST["estado"] . "; " . $_POST["cpf"] . "; " . $_POST["datanasc"] . ";\n";
	
		echo "<p>Escrito com sucesso!</p>";
	
		fwrite($arq, $linha);
	
		fclose($arq);
	
?>
	
