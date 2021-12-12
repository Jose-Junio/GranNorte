<!DOCTYPE html> 
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="imgs/icon.png" type="image/x-icon"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?php
				if (isset($_GET['result']) && $_GET['result'] == 0) {
				  ?>
				  <div class="alert alert-danger alert-dismissible fade show" role="alert">
					Erro ao cadastrar!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <?php
				} elseif (isset($_GET['result']) && $_GET['result'] == 1) {
				?>
				  <div class="alert alert-success alert-dismissible fade show" role="alert">
					Cadastro realizada com sucesso!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				<?php
				}
				?>
			
				<div class="login100-form-title" style="background-image: url(imgs/maior.jpg);">
				</div>
				
				<div style="width: 95%" align="center">
					<form style="margin-left: 2.5%;" action="cadastrarCliente.php" method="post">
					
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputEmail4">Email</label>
								<input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="cemail">
							</div>
							<div class="form-group col-md-6">
								<label for="inputPassword4">Senha</label>
								<input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="csenha">
							</div>
						</div>
						
						<div class="form-group">
							<label for="inputAddress">Nome</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="Nome" name="cnome">
						</div>
						<div class="form-group">
							<label for="inputAddress">CPF</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="CPF" name="ccpf">
						</div>
						<div class="form-group">
							<label for="inputAddress">Nacionalidade</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="Nacionalidade" name="cnacionalidade">
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity">Carro</label><br>
								<div class="form-check form-check-inline">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="ccarro" id="exampleRadios1" value="Sim" checked>
										<label class="form-check-label" for="exampleRadios1">
										Sim
										</label>
									</div>
								</div>
								<div class="form-check form-check-inline">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="ccarro" id="exampleRadios1" value="Nao" checked>
										<label class="form-check-label" for="exampleRadios1">
										Não
										</label>
									</div>
								</div>
							</div>
							<div class="form-group col-md-4">
								<label for="inputState">Gênero</label>
								<select id="inputState" class="form-control" name="cgenero">
									<option selected>Escolha...</option>
									<option value="H">Homem</option>
									<option value="M">Mulher</option>
									<option value="NI">Não informar</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="inputZip">Data de nascimento</label>
								<input class="form-control" type="date" id="example-date-input" name="cdata">
							</div>
						</div>
						
						<!--
						<div class="form-group">
							<label for="inputAddress">Endereço:</label>
							<label for="inputAddress">Rua</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="Rua">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputEmail4">Beirro</label>
								<input type="email" class="form-control" id="inputEmail4" placeholder="Bairro">
							</div>
							<div class="form-group col-md-6">
								<label for="inputPassword4">Número</label>
								<input type="password" class="form-control" id="inputPassword4" placeholder="Número">
							</div>
						</div>		
						-->
						
						<div class="container-login100-form-btn">
							<a href="login.php" class="login100-form-btn" style="margin-right: 20px;">
								Ir para Login
							</a>
							<button class="login100-form-btn">
								Cadastrar
							</button>
						</div>
					
					</form>
				</div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>