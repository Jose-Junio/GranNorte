 <?php
if (isset($_POST['cemail'])) {
  // Conectando com o banco (veja o arquivo bd_conexao.php)
  // Agora existe o obj $con conectado com o BD
  require_once('bd_conexao.php');
  // Recebendo as informações do form-inserir.php
  $varEmail = $_POST['cemail'];
  $varSenha = $_POST['csenha'];
  $varNome = $_POST['cnome'];
  $varCpf = $_POST['ccpf'];
  $varNacionalidade = $_POST['cnacionalidade'];
  $varCarro = $_POST['ccarro'];
  $varSexo = $_POST['cgenero'];
  $varData = $_POST['cdatas'];
  // Criando a minha string com o código SQL de inserção
  $sql = "
  INSERT INTO cliente(idCliente, nome, cpf, sexo, dataNas, nacionalidade, transporte, email, senha) VALUES 
  ('', '$varNome', '$varCpf', '$varSexo', '$varData', '$varNacionalidade', '$varCarro', '$varEmail', '$varSenha')
  ";
  
  // Mandando a Query para o banco!
  if ($con->query($sql) === TRUE) {
    $flag = 1;
  } else {
    $flag = 0;
  }
  // Fechando a conexão
  fecharConexao($con);
  header("Location: cadastro.php?result=$flag");
} else {
  header("Location: cadastro.php");
}