<?php
include_once('../includes/header.php');
?>

<form action="action/cadastrar_clientes.php" method="POST">
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
        <label for="cpf">CPF</label>
        <input class="form-control" name="cpf">
    </div>
    <div class="form-group">
        <label for="cpf">Data de Nascimento</label>
        <input class="form-control" name="data_nascimento">
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
