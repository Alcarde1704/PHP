<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatório total de vendas</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container">
    <div class="titulo-relatorio">
      <form action="relvenda4.php" method="POST">
        <h2>Relátorio total de vendas de produtos por cliente</h2>
        Produto: <input type="text" name="produto" size="50" maxlength="50"><br>

        Forma de Pagamento: <input type="text" name="fpagto" size="50" maxlength="2"><br>

        <input type="submit" value="Pesquisar" name="botao">
      </form>
    </div>

    <div class="mostra-relatorio">
      <table>
        <tr>
          <th>Cliente</th>
          <th>Produto</th>
          <th>forma pagto</th>
          <th>valor pagar</th>
          <th>data venda</th>
          <?php
          if (isset($_POST["botao"])) {
            require("conecta.php");
            $produto = htmlentities($_POST["produto"]);
            $fpagto = htmlentities($_POST["fpagto"]);
            $busca = $mysqli->query("select * from tb_vendas where produto like '%$produto%' and fpagto = '$fpagto'");
            while ($tb_vendas = $busca->fetch_assoc()) {
              echo "
      <tr>
        
        <td align='center'>$tb_vendas[cliente]</td>
        <td align='center'>$tb_vendas[produto]</td>
        <td align='center'>$tb_vendas[fpagto]</td>
        <td align='center'>$tb_vendas[valorpg]</td>
        <td align='center'>$tb_vendas[dtvenda]</td>

        
      </tr>
      ";
            }
          }
          ?>
        </tr>

      </table>


    </div>

    <a href="cadastro.php">Voltar</a>
  </div>
</body>


</html>