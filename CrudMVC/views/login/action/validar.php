<?php

require_once('../../../conexao.php');

$usuarios_model = new usuarios_model();
$usuarios_model->setConexao($conexao);

$email = $_POST['email'];
$senha = $_POST['senha'];

$dadosUsuario = $usuarios_model->validarUsuario(
$email,
$senha,
);

if(!empty($dadosUsuario)) {
    $_SESSION['dados_usuario'] = $dadosUsuario;
    header('Location: '.BASE_URL.'/views/clientes/listagem.php');
} else {
    echo 'Usuário e senha inválidos';
}