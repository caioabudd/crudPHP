<?php
include('conexao.php');
include('protect.php');

$sql_produtos = "SELECT * FROM produtos";
$query_produtos_puxar = $mysqli->query($sql_produtos) or die ($mysqli->error);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Painel</title>
</head>
<body>
    <hr>
    
<hr>
<h1>Produtos!</h1>
<?php
    while ($produtos = $query_produtos_puxar->fetch_assoc()) { ?> 
        <table border="1">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th></th>
        </thead>
           <tbody>
        <tr>
            <td><?php echo $produtos['id']; ?> </td>
            <td><?php echo $produtos['nome_produto']; ?> </td>
            <td><?php echo $produtos['Quantidade']; ?> </td>
            <td>
                <a href="editar_cliente.php?id=<?php echo $produtos['id']; ?>">Editar</a>
                <a href="excluir.php?id=<?php echo $produtos['id']; ?>">Excluir</a>
            </td>
        </tr>
        </tbody>
        <?php  } ?>
    

    </table>
</form>
    <p>
        <a href="logout.php">Sair</a>
        <hr>
        <a href="painel.php">Voltar para o painel</a>
    </p>
</body>
</html>