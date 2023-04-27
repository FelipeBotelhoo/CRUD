<?php

require_once('../../../conexao.php');

$query = new query_mysql();
$query->setTabela('clientes');

$id = $_GET['id'];

$sql = $query->deletarByID($id);

$result = $conexao->query($sql);

echo '<a href="./listagem.php">Voltar para a listagem</a>';

$error = mysqli_error($conexao);
if ($error != '') {
    $_SESSION['msg_error'] = $error;
}else {
    $_SESSION['msg_success'] = 'Cliente deletado com sucesso!';
}
header('location:../listagem.php');