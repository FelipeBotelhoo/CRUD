<?php

require_once('../../../conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$cnpj = $_POST["cnpj"];
$telefone = $_POST["telefone"];

$sql = 'INSERT INTO fornecedores (nome,email,cnpj,telefone) 
VALUES ("'.$nome.'","'.$email.'","'.$cnpj.'","'.$telefone.'")';

    

$result = $conexao->query($sql);



$error = mysqli_error($conexao);
if ($error != '') {
    $_SESSION['msg_error'] = $error;
}else {
    $_SESSION['msg_success'] = 'Fornecedor cadastrado com sucesso!';
}
header('location:../listagem.php');