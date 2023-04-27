<?php

require_once('../../conexao.php');

include_once('./../includes/header.php');

$usuarios_model = new usuarios_model();
$usuarios_model->setConexao($conexao);



echo '<a class="btn btn-success" href="cadastroNovoUsuario.php">Cadastrar novo</a>';

$listagemUsuarios = $usuarios_model->getAll();

echo '<table class="table table-striped">';
echo '
<thead>
    <td>ID</td>
    <td>Nome</td>
    <td>Telefone</td>
    <td>E-mail</td>
    </thead>
    <tbody>';

    foreach ($listagemUsuarios as $key => $dados) {
        echo '<tr>';
        echo "<td> " .$dados["id"]."</td>";
        echo "<td> " .$dados["nome"]. "</td>";
        echo "<td> " .$dados["telefone"]. "</td>";
        echo "<td> " .$dados["email"]. "</td>";
        echo '<td><a href="atualizar.php?id='.$dados['id'].'">Atualizar </a></td>';
        echo '<td><a href="action/deletar_usuarios.php?id='.$dados["id"].'">Deletar</a>'. "</td>";
        echo '</tr>';
    }
    echo '</table>';
