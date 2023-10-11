<?php

    include_once("conexao.php");

    if(!isset($_POST["id"]))
        header("location: index.php");

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $motor = $_POST["motor"];
    $marca = $_POST["marca"];
    $carroceria = $_POST["carroceria"];
    $combustivel = $_POST["combustivel"];

    $sql = "UPDATE carro SET nome = '$nome', preco = '$preco', motor = '$motor', marca ='$marca', carroceria = '$carroceria', combustivel = '$combustivel' WHERE pk_carro = $id";

    mysqli_query($conn, $sql);

    if(mysqli_error($conn)=="")
        header("location: index.php");

?>