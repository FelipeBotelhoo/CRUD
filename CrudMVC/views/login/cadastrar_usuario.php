<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
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
<body><form action="action/cadastrando_usuario.php" method="POST">
    <div class="container">
        
    <div class="form-group"> 
        <label for="nome">Nome</label>
        <input  type="text" class="form-control" name="nome">
    </div>
    <div class="form-group"> 
        <label for="tel">Telefone</label>
        <input  type="text" class="form-control" name="tel">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha">
    </div>

    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
    
</body>
</html>