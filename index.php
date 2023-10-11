<?php
    include_once('conexao.php');
    $sql = 'select * from carro';
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="form_novo.php" class="btn btn-primary">NOVO</a>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Motor</th>
                <th scope="col">Marca</th>
                <th scope="col">Carroceria</th>
                <th scope="col">Combustível</th>
              </tr>
            </thead>
            <tbody>

                <?php
                    while ($row = mysqli_fetch_assoc($query)){
                ?>

                <tr>
                    <th scope="row"><?php echo $row['pk_carro']; ?></th>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['preco']; ?></td>
                    <td><?php echo $row['motor']; ?></td>
                    <td><?php echo $row['marca']; ?></td>
                    <td><?php echo $row['carroceria']; ?></td>
                    <td><?php echo $row['combustivel']; ?></td>
                    <td><a href="form_alterar.php?id=<?php echo $row['pk_carro']; ?>" style="text-decoration: none;">ALTERAR</a> | <a href="deletar.php?id=<?php echo $row['pk_carro']; ?>" style="text-decoration: none;">APAGAR</a></td>
                </tr>

                <?php
                    }
                ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>