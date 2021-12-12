<?php
session_start();
if (isset($_SESSION["cliente_logado"]) == true){
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/estilo.css">
		
		<link rel="shortcut icon" href="imgs/icon.png" type="image/x-icon"/>
		<title>Gran Norte</title>
	</head>
	<body>
		
	<!-- Cabeçario -->
	<?php include('include/cabeca.php'); ?>
	
	<!-- Cabeçario minha conta -->
	<?php include('include/cabecaMinhaConta.php'); ?>
	
		<?php 
		
		$cliente = $_SESSION["cliente_logado"];
		
		require_once('bd_conexao.php');
		// Criando a minha string com o código SQL de consulta
		$sql = "
		SELECT *
		FROM reservaquarto INNER JOIN categoriaquarto ON idCategoria = 	fk_idCategoria
		";
		
		$resultado = $con->query($sql);
		?>
		
	<div class="marL marC setecinco marB floatL">
		<?php
			while($infoUsuario = mysqli_fetch_object($resultado)){
		?>
		<div class="reservasConta bordaTotal floatL">
			<div class="total">
				<h3 class="marL floatL">Reserva: <?php echo $infoUsuario->idReserva; ?></h3>
				<h3 class="marL floarL cinco">Valor diário: R$<?php echo $infoUsuario->preço; ?></h3>
				<div id = "imgConta">
					<a href="excluiReserva.php?id=<?php echo $infoUsuario->idReserva; ?>">
						<img style="width: 30%;" src="imgs/lixeira.png" />
					</a>
				</div>
				
				<style >
					#imgConta{
						position: relative;
						margin-left: 850px;
						bottom: 40px;
					}
				</style>
			</div>
		</div>
		<div class="bordaTotal floatL">
			<div class="total marC marL marB ">
				<div class="tres floatL" style="margin-right: 5%;">
					<div class="hover01">
						<div class="float-left">
							<figure><img src="imgs/aproveite1.jpg" /></figure>
						</div>
					</div>
					<!--<div class="hover01">
						<img class="total" src="imgs/aproveite3.jpg">
					</div>-->
					<div class="marC marB">
						<img class="tres" src="imgs/aproveite3.jpg">
						<img class="tres" style="margin-left: 3.5%;" src="imgs/aproveite3.jpg">
						<img class="tres" style="margin-left: 3.5%;" src="imgs/aproveite3.jpg">
					</div>
				</div>
					
				<div class="tres floatL" >
					<h3 class="marC marB"><?php echo $infoUsuario->nomeCategoria; ?></h3>
					<h3>Descrição: <br/> 
					<?php echo $infoUsuario->descricao; ?></h3>
				</div>
				
				<div class="tres floatL">
					<h3 class="marC marB">Data de entrada:<br/>
					<?php echo $infoUsuario->dataEntrada; ?></h3>
					
					<h3>Data de saída:<br/>
					<?php echo $infoUsuario->dataSaida; ?></h3>
				</div>
			</div>
		</div>
		<?php
		}
		?>		
	</div>
		
	<!-- pular espaço -->
	<div class="marB total floatL"></div>
		
	<!-- reserva -->
	<?php include('include/reserva.php'); ?>
			
	<!-- rodape -->
	<?php include('include/rodape.php'); ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
<?php
}
else{
	header("Location: index.php");
}
?>