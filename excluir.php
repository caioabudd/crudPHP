<?php
if(isset($_POST['confirmar'])){
include("conexao.php");

    $id = intval($_GET['id']);
    $sql_code = "DELETE FROM produtos where id ='$id'";
    $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);

    if($sql_query) { ?>

    <h1>Produto deletado com sucesso</h1>
     <p><a href="produtos.php">Clique aqui para voltar a lista</a></p>
        

   <?php } die();

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <h1>Deseja excluir o produto?</h1>
    <form action="" method="POST">
    <a href="painel.php">Não</a>
    <button name="confirmar" value="1" type="submit">Sim</button>
    </form>
   
    
</body>
</html>