<html>
	<head>
		<title>Falls_Car  Locação de Automóveis</title>
		<style>
			.button {
				width: 150px;
				height: 50px;
				text-align: center;
				cursor: pointer;
			}
		</style>
		
		<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
		
		
	</head>
	<body>
	
		<?php
		
	$servername = "localhost";
	$username = "Felipe-Torres";
	$password = "4815162342";
	$DBname = "falls_cars";
			
			$conn = new mysqli($servername, $username, $password, $DBname);
			
		?>
		
		<h3>FALLS CAR</h3>

		<h4>Locação de Automóvel</h4>
		<form id="f1">
			
			<p id="e1">Onde deseja retirar o veículo?</p>
			<input id="e2" list="e" name="estado">
			<datalist id="e">
				<option value="rj"></option>
				<option value="sp"></option>
			</datalist>
			
			<p id="c1">Agora, diga a cidade.</p>
			<input id="c2" list="c" name="cidade">
			<datalist id="c">
				
			</datalist>
			
			<script>
				$('#e2').on("change", function() {
					var vestado = $('#e2').val();
					
					$.ajax({
						url: 'encontrarCidades.php',
						type: 'POST',
						data: {estado: vestado},
						success: function(data) {
							$("#c").html(data);
						}
					});
				})
			
			</script>
			
			
			
			<p id="d1">Quando deseja retirar? </p>
			<input id="d2" type="text" name="data">
			
			
			<p id="p1">Por quantos dias deseja alugar ? </p>
			<input id="p2" list="days" name="periodo">
			<datalist id="days">
				<option value="7">
				<option value="15">
				<option value="30">
			</datalist>
			
			
			
			<p id="dis1"> Qual o modelo do carro ?</p>
			<input id="dis2" list="auto" name="automovel">
			<datalist id="auto">
				
			</datalist>
			<script>

			$('#c2').on("change", function() {


			
			
			var vcidade = $('#c2').val();
				
				console.log(vcidade);
				
				$.ajax({
					url: 'econtrarcarro.php',
					type: 'POST',
					data: {cidade: vcidade},
					success: function(data) {
						$("#auto").html(data);
					}
				});
				})
			</script>
			
			
			<p id="l1">Em qual loja deseja retirar ? </p>
			<input id="l2" list="l"  name="loja">
			<datalist id="l">
				
			</datalist>
			<script>
			$('#c2').on("change", function() {

			var vcidade = $('#c2').val();
				
				$.ajax({
					url: 'encontrarlojas.php',
					type: 'POST',
					data: {cidade: vcidade},
					success: function(data) {
						$("#l").html(data);
					}
				});
			})
			</script>
			
			
			<h4 id="pag">Pagamento da reserva</h4>
			
			<p id="numcc1"> Qual o número do cartão: </p>
			<input id="numcc2" type="text"  name="numcartao">
			
			<p id="nomecc1">Nome do titular do cartão:</p>
			<input id="nomecc2" type="text"  name="nomecartao">
			
			<p id="val1">Validade:</p>
			<input id="val2" type="text"  name="validade">
			
			<p id="codigoseg1">Codigo de segurança:</p>
			<input id="codigoseg2" type="text"  name="codseg">
			
			<p id="cpf1"> CPF do titular</p>
			<input id="cpf2" type="text" name="cpf">
			
		<p><input id="submit" type="submit" form="f1" class="button"><p>
		</form>
		
		<p id="retorno"></p>
		
		<script>
			
			$('#f1').submit(function(e){
				e.preventDefault();
			
				var vestado = $('#e2').val();
				var vcidade = $('#c2').val();
				var vdata = $('#d2').val();
				var vtempo = $('#p2').val();
				var vstatus = $('#dis2').val();
				var vendereco = $('#l2').val(); 
				var vnumcc = $('#numcc2').val();
				var vnomecc = $('#nomecc2').val();
				var vval = $('#val2').val();
				var vcodigoseg = $('#codigoseg2').val();
				var vcpf = $('#cpf2').val();
				
				console.log(vestado, vcidade, vdata, vtempo, vstatus, vendereco, vnumcc, vnomecc, vval, vcodigoseg, vcpf);
				
				$.ajax({
					url: 'atualizarbanco.php', 
					method: 'POST',
					data: {
						estado: vestado,
						cidade: vcidade,
						data: vdata,
						tempo: vtempo,
						status: vstatus,
						endereco: vendereco,
						numcc: vnumcc,
						nomecc: vnomecc,
						valcc: vval,
						codseg: vcodigoseg,
						cpf: vcpf
					},
					success: function(data) {
						$('#retorno').html(data);
					}
				});
			});
			
		</script>
		
	
		
		<h4>Relatório de Locação<h4>
		
		<div id="blcr1">
			
			
		
		</div>
		
		<button id="bre" onclick="relatorio()">Relatório do Sistema</button>
		
		<script>
			function relatorio() {
				document.getElementById("bre").style.display = "none";
				
				$.ajax({
					url: 'gerarrelatorio.php',
					method: 'POST',
					success: function(data) {
						$('#blcr1').html(data);
					}
				});
			}
		</script>
		
	</body>
</html>