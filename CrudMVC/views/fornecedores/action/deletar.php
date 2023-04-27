<?php

require_once('../../../conexao.php');

$query = new query_mysql();
$query->setTabela('fornecedores');

$id = $_GET['id'];

$sql = $query->deletarByID($id);

$result = $conexao->query($sql);



$error = mysqli_error($conexao);
if ($error != '') {
    $_SESSION['msg_error'] = $error;
}else {
    $_SESSION['msg_success'] = 'Fornecedor deletado com sucesso!';
}
header('location:../listagem.php');