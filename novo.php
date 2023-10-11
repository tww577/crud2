<?php

    include_once("conexao.php");

    if(!isset($_POST["nome"]))
        header("location: index.php");

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $motor = $_POST["motor"];
    $marca = $_POST["marca"];
    $carroceria = $_POST["carroceria"];
    $combustivel = $_POST["combustivel"];

    $sql = "INSERT INTO carro(nome, preco, motor, marca, carroceria, combustivel) VALUES('$nome', $preco, '$motor', '$marca', '$carroceria', '$combustivel')";
    mysqli_query($conn, $sql);
    if(mysqli_error($conn)=="")
        header("location: index.php");

?>