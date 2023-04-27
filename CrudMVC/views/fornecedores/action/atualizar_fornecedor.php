<?php

require_once('../../../conexao.php');
$dados = [
    'id'=>$_POST['id'],
    'nome'=>$_POST['nome'],
    'email'=>$_POST['email'],
    'telefone'=>$_POST['telefone'],
    'cnpj'=>$_POST['cnpj'],
    
];
$fornecedores_model = new fornecedores_model();
$fornecedores_model->setConexao($conexao);
$fornecedores_model->updateByID($dados['id'], $dados);


echo mysqli_error($conexao);



$error = mysqli_error($conexao);
if ($error != '') {
    $_SESSION['msg_error'] = $error;
}else {
    $_SESSION['msg_success'] = 'Fornecedor atualizado com sucesso!';
}
header('location:../listagem.php');