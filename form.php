<?php

    session_start();
    include_once("conexao.php");

    $nome = isset($_POST["f-nome"]) ? $_POST["f-nome"] : "Nome não informado";
    $email = isset($_POST["f-email"]) ? $_POST["f-email"] : "Email não informado";
    $empresa = isset($_POST["f-empresa"]) ? $_POST["f-empresa"] : "Empresa não informada";
    $telefone = isset($_POST["f-telefone"]) ? $_POST["f-telefone"] : "Telefone não informado";
    $mensagem = isset($_POST["textMensagem"]) ? $_POST["textMensagem"] : "Não foi escrita nenhuma mensagem";

    $query = 'INSERT INTO tb_formulario (nome, email, empresa, telefone, mensagem)
                VALUES ("'.$nome.'", "'.$email.'", "'.$empresa.'", "'.$telefone.'", "'.$mensagem.'")
            ';

    mysqli_query($conexao, $query);

    if (mysqli_insert_id($conexao)) {
        $_SESSION['msg'] = "<script> alert('Formulário enviado com Sucesso!') </script>";
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }

?>