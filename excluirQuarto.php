<?php
if (isset($_GET['id'])) {
  // Conectando com o banco (veja o arquivo bd_conexao.php)
  // Agora existe o obj $con conectado com o BD
  require_once('bd_conexao.php');
  // Recebendo as informações do form-excluir.php
  $id = $_GET['id'];
  // Criando a minha string com o código SQL de exclusão
  $sql = "
  DELETE FROM Quarto
  WHERE numeroQuarto = $id
  ";
  // Mandando a Query para o banco!
  if ($con->query($sql) === TRUE) {
    $flag = 1;
  } else {
    $flag = 0;
  }
  // Fechando a conexão
  fecharConexao($con);
  if (isset($_GET['botao'])) {
    header("Location: excluirQuarto.php?result=$flag");
  } else {
    header("Location: listarQuartos.php?result=$flag");
  }
} else {
  header("Location: inserir.php");
}