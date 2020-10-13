<?php
	
		$arq = fopen("Arq.txt","r");
		$arq2 = fopen("Mereço_um9.txt","w");
		while(!=feof($arq))
		{
			$linha = fgets($arq);
			fwrite($arq2, $linha);
		}
			fclose($arq);
			fclose($arq2);
	?>