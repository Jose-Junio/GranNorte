 <?php
if (isset($_GET['id'])) {
  // Conectando com o banco (veja o arquivo bd_conexao.php)
  // Agora existe o obj $con conectado com o BD
  require_once('bd_conexao.php');
  // Recebendo as informações do form-excluir.php
  $id = $_GET['id'];
  // Criando a minha string com o código SQL de exclusão
  $sql = "
  DELETE FROM reservaquarto
  WHERE idReserva = $id
  ";
  // Mandando a Query para o banco!
  if ($con->query($sql) === TRUE) {
    $flag = 1;
  } else {
    $flag = 0;
  }
  // Fechando a conexão
  fecharConexao($con);
    header("Location: minhaConta.php");
} else {
  header("Location: minhaConta.php");
}