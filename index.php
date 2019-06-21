<?php
include 'conn.php';

$sql = "SELECT * From PRODUTO";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href='http://localhost/avaliacao/cadastro.php'><button>CADASTRAR PRODUTOS</button></a><br>
    <table border=1>
        <thead>
            <th>COD. DO PRODUTO</th>
            <th>NOME DO PRODUTO</th>
            <th>DATA DE CADASTRO</th>
            <th>VALOR</th>
            <th></th>
        </thead>
        <?php while($dados = $result->fetch_assoc()) { 
            $COD_PRODUTO = $dados['COD_PRODUTO'];    
        ?>
        <tbody>
            <td><?php echo $dados['COD_PRODUTO']; ?></td>
            <td><?php echo $dados['NOM_PRODUTO']; ?></td>
            <td><?php echo $dados['DATA_CADASTRO']; ?></td>
            <td><?php echo $dados['VALOR']; ?></td>
        </tbody>
        <?php } ?>
    </table>    

</body>
</html>
