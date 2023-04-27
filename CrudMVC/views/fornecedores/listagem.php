<?php

require_once('../../conexao.php');

include_once('./../includes/header.php');

$fornecedores_model = new fornecedores_model();
$fornecedores_model->setConexao($conexao);

echo '<a class="btn btn-success" href="./cadastrar.php">Cadastrar novo</a>';

$listagemFornecedores = $fornecedores_model->getAll();

echo '<table class="table table-striped">';
echo '
<thead>
    <td>ID</td>
    <td>Nome</td>
    <td>CNPJ</td>
    <td>Telefone</td>
    <td>E-mail</td>
    </thead>
    <tbody>';

    foreach ($listagemFornecedores as $key => $dados) {
        echo '<tr>';
        echo "<td> " .$dados["id"]."</td>";
        echo "<td> " .$dados["nome"]. "</td>";
        echo "<td> " .$dados["cnpj"]. "</td>";
        echo "<td> " .$dados["telefone"]. "</td>";
        echo "<td> " .$dados["email"]. "</td>";
        echo '<td><a href="atualizar.php?id='.$dados['id'].'">Atualizar </a></td>';
        echo '<td><a href="action/deletar.php?id='.$dados["id"].'">Deletar</a>'. "</td>";
        echo '</tr>';
    }
    echo '</table>';
    include_once('./../includes/footer.php');
?>