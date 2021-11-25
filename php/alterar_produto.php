<?php
require("conecta.php");
$produto = "";
$preco = "";
$cor = "";

if (isset($_GET["alterar"])) {
  $idpro = htmlentities($_GET["alterar"]);
  $query = $mysqli->query("select * from tb_produtos where idpro = '$idpro'");
  $tabela = $query->fetch_assoc();
  $produto = $tabela["produto"];
  $preco = $tabela["preco"];
  $cor = $tabela["cor"];
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    form {
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <form method="POST" action="alterar_produto.php">
      <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
      Produto: <input type="text" name="produto" value="<?php echo $produto ?>">
      <br /><br />
      Preco: <input type="text" name="preco" value="<?php echo $preco ?>"><br><br>
      cor: <input type="text" name="cor" value="<?php echo $cor ?>">
      <input type="submit" value="Salvar" name="botao">

    </form>
    <a href="produtos.php"> Voltar </a>
    <br />
  </div>
</body>

</html>


<?php
if (isset($_POST["botao"])) {

  $idpro   = htmlentities($_POST["idpro"]);
  $produto  = htmlentities($_POST["produto"]);
  $preco = htmlentities($_POST["preco"]);
  $cor = htmlentities($_POST["cor"]);

  $mysqli->query("update tb_produtos set produto = '$produto', preco='$preco', cor = '$cor' where idpro = '$idpro'  ");
  echo $mysqli->error;
  if ($mysqli->error == "") {
    echo "Alterado com sucesso";
  }
}
?>