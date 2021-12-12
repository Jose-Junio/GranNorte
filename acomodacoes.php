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

	<!-- BD -->
	<?php 
		// Conectando com o banco (veja o arquivo bd_conexao.php)
		// Agora existe o obj $con conectado com o BD
		require_once('bd_conexao.php');
		// Criando a minha string com o código SQL de consulta
		$sql = "
		SELECT *
		FROM categoriaquarto INNER JOIN imagemquarto ON idImagem = imagemQuarto_idImagem 
		";
		
		$resultado = $con->query($sql);
		
	?>
	
	
	<!-- acomodações -->
	<div class="padB padC total" align="center">
		<h2 class="doiscinco cor">- Quartos -</h2>
		<div class="total padC" align="center">
			<div class="setecinco" style="margin: 0px 25%;">
			
				<?php
					while($infoUsuario = mysqli_fetch_object($resultado)){
				?>
				<a href="quarto.php?cat=<?php echo $infoUsuario->idCategoria; ?>">
					<div class="tres floatL" style="margin-right: 5%;">
						<div class="hover01">
							<img class="total" src="<?php echo $infoUsuario->linkImagem; ?>">
						</div>
						<div class="marC">
							<img class="tres" src="imgs/aproveite3.jpg">
							<img class="tres" src="imgs/aproveite3.jpg">
							<img class="tres" src="imgs/aproveite3.jpg">
						</div>
						<div class="marC">
							<h3><?php echo $infoUsuario->nomeCategoria; ?></h3>
						</div>
					</div>
				</a>
				<?php
					}
				?>  
				
			</div>
		</div>
	</div>
	
	<!-- Comodidades -->
	<div class="marC total" align="center">
		
		<h2 class="marC doiscinco cor"> Comodidades </h2>
		<div class="setecinco padC">
			<img class="iconComodidades" src="imgs/icone/tv.png" alt=""> 
			<img class="iconComodidades" src="imgs/icone/frigobar.png" alt="">
			<img class="iconComodidades" src="imgs/icone/cama.png" alt="">
			<img class="iconComodidades" src="imgs/icone/wifi.png" alt="">
			<img class="iconComodidades" src="imgs/icone/arcondicionado.png" alt="">
		</div>
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