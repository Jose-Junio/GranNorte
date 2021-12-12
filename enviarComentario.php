 <?php
if (isset($_POST['nome'])) {
  // Conectando com o banco (veja o arquivo bd_conexao.php)
  // Agora existe o obj $con conectado com o BD
  require_once('bd_conexao.php');
  // Recebendo as informações do form-inserir.php
  $varNome = $_POST['nome'];
  $varEmail = $_POST['email'];
  $varMsg = $_POST['comentario'];
  // Criando a minha string com o código SQL de inserção
  $sql = "
  INSERT INTO comentario(nome, email, mensagem,id)
  VALUES('$varNome', '$varEmail', '$varMsg', '')
  ";
  
  // Mandando a Query para o banco!
  if ($con->query($sql) === TRUE) {
    $flag = 1;
  } else {
    $flag = 0;
  }
  // Fechando a conexão
  fecharConexao($con);
  header("Location: contato.php?result=$flag");
} else {
  header("Location: contat.php");
}