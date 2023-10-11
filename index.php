<?php
    include_once('conexao.php');
    $sql = 'select * from pessoa';
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <th scope="col">Peso</th>
                <th scope="col">Nascimento</th>
                <th scope="col">Opções</th>
              </tr>
            </thead>
            <tbody>

                <?php
                    while ($row = mysqli_fetch_assoc($query)){
                ?>

                <tr>
                    <th scope="row"><?php echo $row['pk_carro']; ?></th>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['peso']; ?></td>
                    <td><?php echo $row['nascimento']; ?></td>
                    <td><a href="form_alterar.php?id=<?php echo $row['pk_carro']; ?>" style="text-decoration: none;">ALTERAR</a> | <a href="deletar.php?id=<?php echo $row['pk_carro']; ?>" style="text-decoration: none;">APAGAR</a></td>
                </tr>

                <?php
                    }
                ?>

            </tbody>
        </table>
    </div>

</body>
</html>