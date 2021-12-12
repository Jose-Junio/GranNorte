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

	<!-- corpo -->
	<div align="center">
		<div class="setecinco padC" align="left">
		
			<div align="center">	
				<h2 class="total cor padB">- Fale conosco - </h2>
			</div>
		
			<div class="cinco floatL">
				
				<div class="total">
					<div class="padL">
					
						<a href="https://www.instagram.com/grannortehotel/"><h4><img src="imgs/icone/instagram-logo.png" width="30px" alt="instagram"> @grannorte</h4></a>
					</div>
					<div class="padL padC">
						
						<a href="tel:55383838414157"><h4><img src="imgs/icone/telefone.png" width="30px" alt="telefone"> (38) 3841-4157</h4></a>
						<a href="tel:5538389.91839594l"><h4><img src="imgs/icone/whatsapp-logo.png" width="30px" alt="Whatsapp"> (38) 9.9183-9594</h4></a>
					</div>
					<div class="padL padC">
						
						<a href="https://www.facebook.com/grannortehotel/"><h4><img src="imgs/icone/facebook-logo.png" width="30px" alt="Facebook"> Gran Norte</h4></a>
					</div>
				</div>
				<div class="total padC">
					<h4>Av. Sebastião Moreira de Oliveira, 199, Centro, Salinas-MG</h4>
				</div>
			</div>

			<div class="trestres floatL">
				<?php
				if (isset($_GET['result']) && $_GET['result'] == 0) {
				  ?>
				  <div class="alert alert-danger alert-dismissible fade show" role="alert">
					Erro ao enviar o comentário!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <?php
				} elseif (isset($_GET['result']) && $_GET['result'] == 1) {
				?>
				  <div class="alert alert-success alert-dismissible fade show" role="alert">
					Comentário enviado com sucesso!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				<?php
				}
				?>
				<form action="enviarComentario.php" method="post">
					<div class="form-group">
				    	<label for="exampleFormControlInput1">Nome</label>
			   			<input type="text" class="form-control" id="nome" placeholder="Name" name="nome">
			  		</div>
			  		<div class="form-group">
				    	<label for="exampleFormControlInput1">Email</label>
			   			<input type="email" class="form-control" id="email" placeholder="email" name="email">
			  		</div>
			  		<div class="form-group">
			    		<label for="exampleFormControlTextarea1">Mensagem</label>
			    		<textarea class="form-control" id="mensagem" rows="3" name="comentario"></textarea>
			  		</div>
					<button class="btn btn-primary mb-2">Enviar</button>
				</form>
			</div>
		</div>
	</div>

	<!-- <?php include('include/rodape.php'); ?> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>






























