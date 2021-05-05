<?php

// $nome = isset($_POST["f-nome"]) ? $_POST["f-nome"] : "Nome não informado";
// $email = isset($_POST["f-email"]) ? $_POST["f-email"] : "Email não informado";
// $empresa = isset($_POST["f-empresa"]) ? $_POST["f-empresa"] : "Empresa não informada";
// $telefone = isset($_POST["f-telefone"]) ? $_POST["f-telefone"] : "Telefone não informado";
// $mensagem = isset($_POST["textMensagem"]) ? $_POST["textMensagem"] : "Não foi escrita nenhuma mensagem";

$vnome = $_GET["f-nome"];
$vemail = $_GET["f-email"];
$vempresa = $_GET["f-empresa"];
$vtelefone = $_GET["f-telefone"];
$vmensagem = $_GET["textMensagem"];

echo "Formulário enviado com sucesso";

?>