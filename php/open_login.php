<?php
session_start();

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

require("conecta.php");

$resultado = $mysqli->query("SELECT * FROM `tb_usuario` WHERE `usuario` = '$usuario' AND `senha` = '$senha'");

if ($resultado->num_rows == 1) {
  $_SESSION['usuario'] = $usuario;
  $_SESSION['senha'] = $senha;
  Header("Location: cadastro.php");
} else {
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location: ../index.php');
}
