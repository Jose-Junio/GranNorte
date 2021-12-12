<?php
if (isset($_POST['botao'])) {
  // Conectando com o banco (veja o arquivo bd_conexao.php)
  // Agora existe o obj $con conectado com o BD
  require_once('bd_conexao.php');
  // Recebendo as informações do form-inserir.php
  $varLink = $_POST['link'];
  $varDesk = $_POST['desc'];
  // Criando a minha string com o código SQL de inserção
  $sql = "
  INSERT INTO imagemquarto (idImagem, linkImagem, descricao)
  VALUES ('', 'imgs/$varLink', '$varDesk')
  ";
  // Mandando a Query para o banco!
  if ($con->query($sql) === TRUE) {
    $flag = 1;
  } else {
    $flag = 0;
  }
  // Fechando a conexão
  fecharConexao($con);
  header("Location: cadastrarImagem.php?result=$flag");
} else {
  header("Location: cadastrarImagem.php");
}