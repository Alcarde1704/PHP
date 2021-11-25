<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_GET["excluir"])) {
    $idcli = htmlentities($_GET["excluir"]);
    require("conecta.php");
    $mysqli->query("delete from tb_clientes where idcli = '$idcli'");
    echo $mysqli->error;
    if ($mysqli->error == "") {
      echo "Excluido com sucesso!!";
      echo "<a href='clientes.php'>Voltar</a>";
    }
  }
  ?>


</body>

</html>