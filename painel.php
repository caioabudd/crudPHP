<?php
include('conexao.php');
include('protect.php');


if(isset($_POST['submit'])){
$produtos = $_POST['quantidade'];
$nome_produto = $_POST['nome'];



$sql_code = "INSERT INTO produtos (Quantidade, nome_produto) VALUES ('$produtos', '$nome_produto')";
$query_produtos_guardar = $mysqli->query($sql_code) or die ($mysqli->error);

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesPainel.css">
    <title>Painel</title>
</head>
<body>
    <hr>
    Bem vindo ao painel
    <hr>
    <div class="produtos">
    <a href="produtos.php">Ir para produtos</a>
    </div>
<hr>
<div class="container">
<h1>Cadastrar produtos!</h1>
<form action="" method="POST">
    <p>
       <label>Nome do Produto</label> 
       <input type="text" name="nome" id="nome" require>
    </p>
    <p>
       <label>Quantidade</label> 
       <input type="number" name="quantidade" id="" require>
    </p>
    <p class="btn">
        <button type="submit" value="submit" name="submit">Enviar</button>
    </p>

</form>
    <p class="btn-sair">
        <a href="logout.php">Sair</a>
    </p>

    </div>
</body>
</html>