<?php

require_once('../../conexao.php');

include_once('./../includes/header.php');

$clientes_model = new clientes_model();
$clientes_model->setConexao($conexao);


echo '<a class="btn btn-success" href="./cadastrando.php">Cadastrar novo</a>';

$listagemClientes = $clientes_model->getAll();

    echo '<table class="table table-striped">';
    echo '
    <thead>
        <td>ID</td>
        <td>Nome</td>
        <td>CPF</td>
        <td>E-mail</td>
        <td>Telefone</td>
        <td>Data de nascimento</td>
        <td>Ativo</td>
        </thead>
        <tbody>';

foreach ($listagemClientes as $key => $dados) {
    echo '<tr>';
    echo "<td> " .$dados["id"]."</td>";
    echo "<td> " .$dados["nome"]. "</td>";
    echo "<td> " .$dados["cpf"]. "</td>";
    echo "<td> " .$dados["email"]. "</td>";
    echo "<td> " .$dados["telefone"]. "</td>";
    echo "<td> " .$dados["data_nascimento"]. "</td>";
    echo "<td> " .$dados["ativo"]."</td>";
    echo '<td><a href="atualizar.php?id='.$dados['id'].'">Atualizar </a></td>';
    echo '<td><a href="action/deletar.php?id='.$dados["id"].'">Deletar</a>'. "</td>";
    echo '</tr>';
}
echo '</table>';


include_once('./../includes/footer.php');
?>