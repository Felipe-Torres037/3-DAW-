
	<?php
	
		$arquivo = fopen("Arq.txt","r") or die ("Não foi Abrir o arquivo");
		for($i=0;$i<3;$i++){
			echo fgets($arquivo)."<br>";
		}
			fclose($arquivo);
	?>
	
