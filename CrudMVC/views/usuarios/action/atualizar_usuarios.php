<?php

require_once('../../../conexao.php');
$dados = [
    'id'=>$_POST['id'],
    'nome'=>$_POST['nome'],
    'telefone'=>$_POST['telefone'],
    'email'=>$_POST['email'],
    'senha'=>$_POST['senha']
];
$usuarios_model = new usuarios_model();
$usuarios_model->setConexao($conexao);
$usuarios_model->updateByID($dados['id'], $dados);


echo mysqli_error($conexao);



$error = mysqli_error($conexao);
if ($error != '') {
    $_SESSION['msg_error'] = $error;
}else {
    $_SESSION['msg_success'] = 'Cliente atualizado com sucesso!';
}
header('location:../listagem.php');