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

	<?php 
		$varCat = $_GET['cat'];
	?>
	<!-- BD -->
	<?php 
		// Conectando com o banco (veja o arquivo bd_conexao.php)
		// Agora existe o obj $con conectado com o BD
		require_once('bd_conexao.php');
		// Criando a minha string com o código SQL de consulta
		$sql = "
		SELECT *
		FROM categoriaquarto INNER JOIN imagemquarto ON idImagem = imagemQuarto_idImagem WHERE idCategoria = '$varCat'
		";
		
		$resultado = $con->query($sql);
		
	?>
	
	
	<!-- acomodações -->
	<div class="padB padC total marB" align="center">
		<h2 class="doiscinco cor">- Quarto  -</h2>
		<div class="total padC">			
			<?php
				$infoUsuario = mysqli_fetch_object($resultado);
			?>
			<div class="setecinco" style="margin: 0px 25%;">
				<div class="floatL doiscinco">
					<div class="hover01 ">
						<img class="total" src="<?php echo $infoUsuario->linkImagem; ?>">
					</div>
					<div class="marC">
						<img class="tres" src="imgs/aproveite3.jpg">
						<img class="tres" src="imgs/aproveite3.jpg">
						<img class="tres" src="imgs/aproveite3.jpg">
					</div>
				</div>
				<div class="padL floatL " style="height: 300px;">
					<div class="padL" align="left">
						<h3>Categoria: <?php echo $infoUsuario->nomeCategoria; ?></h3>
						<h3>R$<?php echo $infoUsuario->preço; ?></h3>
						<h3>Camas: <?php echo $infoUsuario->camas; ?></h3>
						<h3>Comodos: <?php echo $infoUsuario->comodos; ?></h3>
						<h3>Descrição: <?php echo $infoUsuario->descricao; ?></h3>
					</div>
				</div>	
			</div>
		</div>
	</div>
	
	<div style="margin: 0px auto;" class="padC setecinco">
		<form action="validarReservar.php?cat=<?php echo $infoUsuario->idCategoria; ?>" method="post">
			<div class="form-group col-md-6 floatL">
				<label for="inputZip">Data de entrada</label>
				<input class="form-control" type="date" id="example-date-input" name="dataHE">
			</div>
			<div class="form-group col-md-6 floatL">
				<label for="inputZip">Data de saída</label>
				<input class="form-control" type="date" id="example-date-input" name="dataHS">
			</div>
			
			<button type="submit" name="botao" class="cinco" style="margin: 0px 25%;">
				<img src="imgs/reserva.png" class="total">
			</button>
			
		</form>
	</div>
	
	<!-- rodape -->
	<?php include('include/rodape.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>