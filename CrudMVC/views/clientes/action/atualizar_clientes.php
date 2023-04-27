<?php

require_once('../../../conexao.php');
$dados = [
    'id'=>$_POST['id'],
    'nome'=>$_POST['nome'],
    'email'=>$_POST['email'],
    'telefone'=>$_POST['telefone'],
    'data_nascimento'=>$_POST['data_nascimento'],
    'cpf'=>$_POST['cpf']
];
$clientes_model = new clientes_model();
$clientes_model->setConexao($conexao);
$clientes_model->updateByID($dados['id'], $dados);


echo mysqli_error($conexao);

echo '<a href="./listagem.php">Voltar para a listagem</a>';

$error = mysqli_error($conexao);
if ($error != '') {
    $_SESSION['msg_error'] = $error;
}else {
    $_SESSION['msg_success'] = 'Cliente atualizado com sucesso!';
}
header('location:../listagem.php');