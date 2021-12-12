<?php
if (!isset($_GET['id'])){
  header('Location: listarQuartos.php');
}
else{
session_start();
if (isset($_SESSION["admin_logado"]) == true){
?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- Icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <title>Alterar Quartos</title>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 mx-auto">
		
		<div align="center">
			<a class="active" href="hubAdmin.php"><button type="button" class="btn btn-primary">Voltar</button></a>
		</div>
		
          <?php
        if (isset($_GET['result']) && $_GET['result'] == 0) {
          ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Erro ao inserir no banco!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
        } elseif (isset($_GET['result']) && $_GET['result'] == 1) {
          ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Inserção realizada com sucesso!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php
        }
        ?>

          <?php
        // Conectando com o banco (veja o arquivo bd_conexao.php)
        // Agora existe o obj $con conectado com o BD
        require_once('bd_conexao.php');
        // Pegando o id apartir da url
        $varId = $_GET['id'];
        // Criando a minha string com o código SQL de consulta
        $sql = "
        SELECT *
        FROM quarto
        WHERE numeroQuarto = $varId
        ";
        // Mandando uma instrução SQL Query para o banco. 
        $resultado = $con->query($sql);
        // Trantando a variável resultado em objeto
        $infoAlt = mysqli_fetch_object($resultado);
        ?>

          <form action="alterarQuartoBanco.php?anum=<?php echo $varId ?>" method="post">
            <div class="form-group">
				
				
				<label for="exampleInputId">Novo número</label>
				<input value="<?php echo $infoAlt->numeroQuarto; ?>" name="num" type="text" class="form-control"
					id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Número">
				<div class="form-group">
				
				Categoria
				<select name="categoria" class="form-control">
					<?php
						$sqlQ = "
						SELECT *
						FROM categoriaquarto
						";
						// Mandando uma instrução SQL Query para o banco. 
						$resultadoQ = $con->query($sqlQ);
					
						while($infoQ = mysqli_fetch_object($resultadoQ)){
							$selected = "";
							if ($infoQ->idCategoria == $infoAlt->categoriaQuarto_idCategoria)
								$selected = "selected";
							
							?>
							<option value="<?php echo $infoQ->idCategoria;?>" <?php echo $selected;?>><?php echo $infoQ->nomeCategoria; ?></option>
							<?php
						}
					?>      
				</select>
			</div>
            <button type="submit" name="botao" class="btn btn-primary btn-block">Salvar</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  </body>

</html>

<?php
}
else{
	header("Location: admin.php");
}
}
?>