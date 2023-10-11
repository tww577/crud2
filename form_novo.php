<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD - Create</title>
</head>
<body>
    <div class="container">
        <h1>Informe os dados a serem inseridos</h1>

        <form action="novo.php" method="post">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" aria-describedby="Nome" name="nome">
            </div>
            <div class="mb-3">
              <label for="preco" class="form-label">Preço</label>
              <input type="text" class="form-control" id="preco" name="preco">
            </div>
            <div class="mb-3">
              <label for="motor" class="form-label">Motor</label>
              <input type="text" class="form-control" id="motor" name="motor">
            </div>
            <div class="mb-3">
              <label for="marca" class="form-label">Marca</label>
              <input type="text" class="form-control" id="marca" name="marca">
            </div>
            <div class="mb-3">
              <label for="carroceria" class="form-label">Carroceria</label>
              <input type="text" class="form-control" id="carroceria" name="carroceria">
            </div>
            <div class="mb-3">
              <label for="combustivel" class="form-label">Combustível</label>
              <select name="combustivel" id="combustivel" class="form-select">
                <option value="Gasolina">Gasolina</option>
                <option value="Diesel">Diesel</option>
                <option value="Elétrico">Elétrico</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>