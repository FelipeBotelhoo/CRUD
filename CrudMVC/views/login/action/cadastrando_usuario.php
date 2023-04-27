<?php

require_once('../../../conexao.php');

$nome=$_POST['nome'];
$tel=$_POST['tel'];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = 'INSERT INTO usuarios (nome,telefone,email,senha) 
VALUES ("'.$nome.'","'.$tel.'","'.$email.'","'.$senha.'")';



$result = $conexao->query($sql);



$error = mysqli_error($conexao);
if ($error != '') {
    $_SESSION['msg_error'] = $error;
}else {
    $_SESSION['msg_success'] = 'Usuario cadastrado com sucesso!';
}
header('location:../../../index.php');