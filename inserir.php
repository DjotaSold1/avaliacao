<?php
include 'conn.php';

$COD_PRODUTO = $_POST['COD_PRODUTO'];
$NOM_PRODUTO = $_POST['NOM_PRODUTO'];
$DATA_CADASTRO = $_POST['DATA_CADASTRO'];
$VALOR = $_POST['VALOR'];

$sql ="INSERT into PRODUTO(COD_PRODUTO,NOM_PRODUTO,DATA_CADASTRO,VALOR)
values($COD_PRODUTO,'$NOM_PRODUTO','$DATA_CADASTRO',$VALOR)";
//var_dump($sql);
$result =$conn->query($sql);

header('Location:http://localhost/avaliacao/index.php');
