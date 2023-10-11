<?php

  include_once('conexao.php');

  if(!isset($_GET["id"]))               # Verifica se a chave 'id' existe no array GET
    header("location: index.php");      # Caso não exista, volta pro index

  if($_GET["id"]=="")
    header("location: index.php");

  $id = $_GET["id"];
  echo $id;

  $sql = "SELECT pk_carro, nome, preco, motor, marca, carroceria, combustivel FROM carro WHERE pk_carro=" . $id;
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);

  echo '<pre>';
  var_dump($row);
  echo '</pre>';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD - Update</title>
</head>
<body>
    <div class="container">
        <h1>Veja os dados abaixo, e altere o que desejar</h1>

        <form action="alterar.php" method="post">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" aria-describedby="Nome" name="nome" value="<?php echo $row["nome"] ?>">
              <input type="hidden" name="id" value="<?php echo $row['pk_carro']; ?>">
            </div>
            <div class="mb-3">
              <label for="nascimento" class="form-label">Preço</label>
              <input type="float" class="form-control" id="preco" name="preco" value="<?php echo $row["preco"] ?>">
            </div>
            <div class="mb-3">
              <label for="motor" class="form-label">Motor</label>
              <input type="text" class="form-control" id="motor" name="motor" value="<?php echo $row["motor"] ?>">
            </div>
            <div class="mb-3">
              <label for="marca" class="form-label">Marca</label>
              <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $row["marca"] ?>">
            </div>
            <div class="mb-3">
              <label for="carroceria" class="form-label">Carroceria</label>
              <input type="text" class="form-control" id="carroceria" name="carroceria" value="<?php echo $row["carroceria"] ?>">
            </div>
            <div class="mb-3">
              <label for="combustivel" class="form-label">Combustível</label>
              <select name="combustivel" id="combustivel" class="form-select">
                <option value="Gasolina" <?php echo $row["combustivel"]=="Gasolina" ? "selected" : ""; ?>>Gasolina</option>
                <option value="Diesel" <?php echo $row["combustivel"]=="Diesel" ? "selected" : ""; ?>>Diesel</option>
                <option value="Elétrico" <?php echo $row["combustivel"]=="Elétrico" ? "selected" : ""; ?>>Elétrico</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>