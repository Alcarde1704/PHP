<?php
if (isset($_POST["botao"])) {
  require("conecta.php");

  //$nome = $_POST["nome"]
  $produto = htmlentities($_POST["produto"]);
  $preco = htmlentities($_POST["preco"]);
  $cor = htmlentities($_POST["cor"]);
  //gravar no banco de dados
  $mysqli->query("insert into tb_produtos values('','$produto','$preco', '$cor')");
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
      <section id="section-produto">
        <h1>CADASTRO DE PRODUTOS</h1>
        <form action="produtos.php" method="POST">
          <table id="table-adiciona">
            <tr>
              <td>PRODUTO: </td>
              <td><input type="text" id="produto" name="produto" /></td>
              <td>Preço: </td>
              <td><input type="text" id="preco" name="preco" /></td>
              <br>
              <td>Cor: </td>
              <td><input type="text" id="cor" name="cor" /></td>
              <br>
              <td><input type="submit" value="adicionar" name="botao"></td>
            </tr>
          </table>
        </form>

        <table cellspacing="0" id="table-mostra">
          <tr>
            <th>Produto</th>
            <th>preco</th>
            <th>Cor</th>
            <th>Ação</th>
            <?php
            require("conecta.php");
            $busca = $mysqli->query("select * from tb_produtos");
            while ($tb_produtos = $busca->fetch_assoc()) {
              echo "
            <tr>
              
              <td align='center'>$tb_produtos[produto]</td>
              <td align='center'>$tb_produtos[preco]</td>
              <td align='center'>$tb_produtos[cor]</td>


              <td width='120'><a href='excluir_produto.php?excluir=$tb_produtos[idpro]'>[excluir]</a>

              <a href='alterar_produto.php?alterar=$tb_produtos[idpro]'>[alterar]</a></td>
              
            </tr>
            ";
            }
            ?>
          </tr>

        </table>
        <br><br><br>

        <a href="cadastro.php">Voltar</a>
      </section>
    </main>

  </div>


</body>

</html>