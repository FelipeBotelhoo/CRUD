<!DOCTYPE html>
<?php
require_once('../../conexao.php');
$id = $_GET['id'];

$fornecedores_model = new fornecedores_model();
$fornecedores_model->setConexao($conexao);
$linha = $fornecedores_model->getByID($id); 
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Último bagulho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
     button{
         margin-left: 80px;
     }
     button:hover{
         background-color: aqua;
         cursor: pointer;
     }
    </style>
</head>
<body>
    <div class="container">
        <form class="col-md-6" method="POST" action="action/atualizar_fornecedor.php">
        
        <input name="id" value="<?php echo $linha['id'];?>">
    
        <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" name="nome" value="<?php echo $linha['nome'];?>">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input class="form-control" name="email" value="<?php echo $linha['email'];?>">
    </div>
    <div class="form-group">
        <label for="cnpj">CNPJ</label>
        <input class="form-control" name="cnpj" value="<?php echo $linha['cnpj'];?>">
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input class="form-control" name="telefone"value="<?php echo $linha['telefone'];?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
    
</body>
</html>