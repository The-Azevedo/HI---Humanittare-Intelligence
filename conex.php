<?php
// definições de host, database, usuário e senha
$host = "DESKTOP-U8R21BH";
$db   = "Humanittare";
$user = "Gumball_01";
$pass = "D0llyM3l40";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass) or trigger_error(mysqli_error(""),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysqli_select_db($db,$con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM Controle_Empresas");
// executa a query
$dados = mysqli_query($query, $con) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>