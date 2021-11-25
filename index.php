<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plataforma de Cadastros</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <main>

      <section id="section-login">
        <div id="login-div">
          <h2>login</h2>
          <form action="php/open_login.php" method="POST">
            <label for="usuario">Usúario: </label><br>
            <input type="text" name="usuario" placeholder="Digite" required maxlength="30"><br>

            <label for="senha">Senha: </label><br>
            <input type="password" name="senha" placeholder="********" required maxlength="20"> <br>

            <input type="submit" value="Entrar" name="botao" id="but-login">
          </form>

        </div>

      </section>




    </main>



  </div>


</body>

</html>