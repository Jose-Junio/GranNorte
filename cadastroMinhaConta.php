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

	<div class="marL marC setecinco marB floatL" style="margin-left: 12.5%;">
		<div align="center">
			<button type="button" class="btn btn-outline-primary">Alterar senha</button>
		</div>
		
		<form>
			<div class="form-group total">
				<label for="inputEmail4">Nome</label>
				<input type="text" class="form-control" id="nome" placeholder="Nome">
			
				<label for="inputEmail4">Email</label>
				<input type="email" class="form-control" id="email" placeholder="Email">
				
				<label for="inputEmail4">CPF</label>
				<input type="text" class="form-control" id="cpf" placeholder="CPF">
			</div>
			<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
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