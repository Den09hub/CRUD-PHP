<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Recursos/css/bootstrap.min.css">

    <title>Cadastro de Espaço</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php
                include "../Conecxao/connect.php";

                $nome = $_POST["nome"];
                $tipo = $_POST["tipo"];
                $capacidade = (int) $_POST["capacidade"];
                $descricao = $_POST["descricao"];

                $sql = "INSERT INTO Espaco (nome, tipo, capacidade, descricao) VALUES ('$nome', '$tipo', $capacidade, '$descricao')";
                
                if (mysqli_query($conn, $sql)) {
                    Mensagem("$nome cadastrado com sucesso!", 'success');
                } else {
                    Mensagem("$nome não cadastrado!", 'danger');
                }

            ?>

            <hr>
            <a href="../Tela_Inicio/index.php" class="btn btn-primary">Voltar</a>

        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>