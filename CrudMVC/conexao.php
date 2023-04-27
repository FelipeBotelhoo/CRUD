<?php

require_once(__DIR__.'/classe_query.php');
require_once(__DIR__.'/model/clientes_model.php');
require_once(__DIR__.'/model/usuarios_model.php');
require_once(__DIR__.'/model/fornecedores_model.php');
require_once(__DIR__.'/constante.php');

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crudmvc";

//conecta-se ao banco de dados MyQSL

$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco
);

//caso algo tenha dado errado, exibe uma mensagem de erro

if(mysqli_connect_errno()) {
    trigger_error(mysqli_connect_error());
}