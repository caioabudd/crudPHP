<?php
include('conexao.php');
include('protect.php');

$id = intval($_GET['id']);
$sql_produtos = "SELECT * FROM produtos where id ='$id'";
$query_produtos_puxar = $mysqli->query($sql_produtos) or die ($mysqli->error);
$produto = $query_produtos_puxar->fetch_assoc();




if(isset($_POST['submit'])){
$produtos = $_POST['quantidade'];
$nome_produto = $_POST['nome'];



$sql_code = "UPDATE produtos SET nome_produto = '$nome_produto', Quantidade = '$produtos' where id ='$id'";
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
    Bem vindo a tabela produtos
    <a href="produtos.php">Ir para produtos</a>
<hr>
<h1>Quantidade de produtos!</h1>
<form action="" method="POST">
    <p>
       <label>Nome do Produto</label> 
       <input type="text" name="nome" id="nome" value="<?php echo $produto['nome_produto']; ?> ">
    </p>
    <p>
       <label>Quantidade</label> 
       <input type="number" name="quantidade" id="" value="<?php echo $produto['Quantidade']; ?> ">
    </p>
    <p class="btn">
        <button type="submit" value="submit" name="submit">Enviar</button>
    </p>

</form>
    <p class="btn">
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>