<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Cadastro</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
  <div class="container">
    <main>
      <header>
        <div class="menu">
          <nav id="navbar">
            <ul>
              <li><a href="clientes.php">Clientes</a></li>
            </ul>
            <ul>
              <li><a href="produtos.php">Produtos</a></li>
            </ul>
          </nav>
        </div>
      </header>



      <section id="section-relatorio">
        <div id="table-relatorio">
          <h1>Relatório de Vendas</h1>
          <table cellspacing="1">
            <tr>
              <th><a href="relvenda1.php">Relatorio 1</a></th>
              <th><a href="relvenda2.php">Relatorio 2</a></th>
              <th><a href="relvenda3.php">Relatorio 3</a></th>
              <th><a href="relvenda4.php">Relatorio 4</a></th>
            <tr>
            <tr>
              <th>Cliente</th>
              <th>Produto</th>
              <th>Forma Pagamento</th>
              <th>Valor A Pagar</th>
              <th>Data Venda</th>



              <?php
              require("conecta.php");

              $busca = $mysqli->query("select * from tb_vendas ");
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

              ?>
            </tr>



          </table>

        </div>
      </section>
    </main>


  </div>


</body>

</html>