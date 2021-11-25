<?php
if (isset($_POST["botao"])) {
  require("conecta.php");

  //$nome = $_POST["nome"]
  $cpfcli = htmlentities($_POST["cpfcli"]);
  $nomecli = htmlentities($_POST["nomecli"]);

  //gravar no banco de dados
  $mysqli->query("insert into tb_clientes values('','$cpfcli','$nomecli')");
  echo $mysqli->error;

  if ($mysqli->error == "") {
    echo "";
  } else {
    echo "erro";
  }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="../css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

  <div class="container">

    <main>
      <section id="section-cliente">
        <h1>CADASTRO DE CLIENTES</h1>
        <form action="clientes.php" method="POST">
          <table id="table-adiciona">
            <tr>
              <td>CPF do Cliente: </td>
              <td><input type="text" id="cpfcli" name="cpfcli" /></td>
              <td>Nome: </td>
              <td><input type="text" id="nomecli" name="nomecli" /></td>
              <br>
              <td><input type="submit" value="adicionar" name="botao"></td>
            </tr>
          </table>
        </form>

        <table cellspacing="0" id="table-mostra">
          <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Ação</th>
            <?php
            require("conecta.php");
            $busca = $mysqli->query("select * from tb_clientes");
            while ($tb_clientes = $busca->fetch_assoc()) {
              echo "
            <tr>
              
              <td align='center'>$tb_clientes[cpfcli]</td>
              <td align='center'>$tb_clientes[nomecli]</td>

              <td width='120'><a href='excluir.php?excluir=$tb_clientes[idcli]'>[excluir]</a>

              <a href='alterar.php?alterar=$tb_clientes[idcli]'>[alterar]</a></td>
              
            </tr>
            ";
            }
            ?>
          </tr>

        </table>
        <br><br><br>

        <a href="cadastro.php">Voltar</a>
    </main>

  </div>


</body>

</html>