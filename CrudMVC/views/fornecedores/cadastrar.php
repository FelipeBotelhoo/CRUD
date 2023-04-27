<?php
include_once('../includes/header.php');
?>

<form action="action/cadastrar_fornecedor.php" method="POST">
    <div class="container">
        <form class="col-md-6" method="POST" action="cadastrar_clientes.php"></form>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" name="nome">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="cnpj">CNPJ</label>
        <input class="form-control" name="cnpj">
    </div>
    <div class="form-group">
        <label for="cpf">Telefone</label>
        <input class="form-control" name="telefone">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
include_once('../includes/header.php');