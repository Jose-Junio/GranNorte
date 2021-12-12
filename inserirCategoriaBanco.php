 <?php
if (isset($_POST['botao'])) {
  // Conectando com o banco (veja o arquivo bd_conexao.php)
  // Agora existe o obj $con conectado com o BD
  require_once('bd_conexao.php');
  // Recebendo as informações do form-inserir.php
  $varNome = $_POST['nome'];
  $varImg = $_POST['img'];
  $varCama = $_POST['camas'];
  $varPreco = $_POST['preco'];
  $varComodo = $_POST['comodos'];
  $varDesc = $_POST['descricao'];
  // Criando a minha string com o código SQL de inserção
  $sql = "
  INSERT INTO categoriaquarto(idCategoria, nomeCategoria, camas, preço, comodos, descricao, imagemQuarto_idImagem)
  VALUES ('', '$varNome', '$varCama', '$varPreco', '$varComodo', '$varDesc', '$varImg')
  ";
  // Mandando a Query para o banco!
  if ($con->query($sql) === TRUE) {
    $flag = 1;
  } else {
    $flag = 0;
  }
  // Fechando a conexão
  fecharConexao($con);
  header("Location: cadastrarCategoria.php?result=$flag");
} else {
  header("Location: cadastrarCategoria.php");
}