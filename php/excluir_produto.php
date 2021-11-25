<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_GET["excluir"])) {
    $idpro = htmlentities($_GET["excluir"]);
    require("conecta.php");
    $mysqli->query("delete from tb_produtos where idpro = '$idpro'");
    echo $mysqli->error;
    if ($mysqli->error == "") {
      echo "Excluido com sucesso!!";
      echo "<a href='produtos.php'>Voltar</a>";
    }
  }
  ?>
</body>

</html>