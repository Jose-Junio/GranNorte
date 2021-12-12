<?php
	session_start();
	if (isset($_SESSION["admin_logado"]) == true){
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
		<title>Hub Admin</title>
	</head>
	<body style="background: #ebeeef;">
		<div align="center">
			<div class="setecinco" style="background: white;">
				<a href="sairAdmin.php" class="btn btn-primary">Sair</a>
				
				<h3> Gerenciar quartos</h3>
				
				<div class="row padB">
				  <div class="col-sm-6">
					<div class="card">
					  <div class="card-body">
						<h5 class="card-title">Cadastrar Quarto</h5>
						<a href="cadastrarQuarto.php" class="btn btn-primary">Explorar</a>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-6">
					<div class="card">
					  <div class="card-body">
						<h5 class="card-title">Cadastrar Categoria</h5>
						<a href="cadastrarCategoria.php" class="btn btn-primary">Explorar</a>
					  </div>
					</div>
				  </div>
				</div>
				
				<div class="row padB">
				  <div class="col-sm-6">
					<div class="card">
					  <div class="card-body">
						<h5 class="card-title">listar quarto</h5>
						<a href="listarQuartos.php" class="btn btn-primary">Explorar</a>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-6">
					<div class="card">
					  <div class="card-body">
						<h5 class="card-title">Listar reservas</h5>
						<a href="listarReservas.php" class="btn btn-primary">Explorar</a>
					  </div>
					</div>
				  </div>
				</div>
				
				<div class="row padB">
					<div class="col-sm-6">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Cadastrar imagem</h5>
							<a href="cadastrarImagem.php" class="btn btn-primary">Explorar</a>
						  </div>
						</div>
					 </div>
					 <div class="col-sm-6">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title">Pesquisar quarto </h5>
							<a href="pesquisarQuarto.php" class="btn btn-primary">Explorar</a>
						  </div>
						</div>
					 </div>
				</div>
				
				<h3> Gerenciar Clientes</h3>
				
				<div class="row padB">
				  <div class="col-sm-6">
					<div class="card">
					  <div class="card-body">
						<h5 class="card-title">Comentários</h5>
						<a href="listarComentario.php" class="btn btn-primary">Explorar</a>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-6">
					<div class="card">
					  <div class="card-body">
						<h5 class="card-title">Listar clientes</h5>
						<a href="listarClientes.php" class="btn btn-primary">Explorar</a>
					  </div>
					</div>
				  </div>
				</div>
				
				<a href="sairAdmin.php" class="btn btn-primary">Sair</a>
			</div>
		</div>
	
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
	header("Location: admin.php");
}
?>